<?php
echo "=== Lab Task 5: PHP Classes and Objects (OOP) ===\n\n";

// 1. Create Book class with properties
class Book {
    // Properties (attributes)
    private $title;
    private $author;
    private $year;
    
    // 2. Constructor to initialize properties
    public function __construct($title = "", $author = "", $year = 0) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
    }
    
    // Method to get book details
    public function getDetails() {
        return "Title: " . $this->title . 
               ", Author: " . $this->author . 
               ", Year: " . $this->year;
    }
    
    // Setter methods to update properties
    
    public function setTitle($title) {
        $this->title = $title;
    }
    
    public function setAuthor($author) {
        $this->author = $author;
    }
    
    public function setYear($year) {
        // Validate year is a reasonable value
        if ($year >= 0 && $year <= date("Y") + 5) {
            $this->year = $year;
        } else {
            echo "Invalid year: $year\n";
        }
    }
    
    // Getter methods (optional but good practice)
    public function getTitle() {
        return $this->title;
    }
    
    public function getAuthor() {
        return $this->author;
    }
    
    public function getYear() {
        return $this->year;
    }
}

echo "1. Creating Book objects:\n";
echo "=========================\n";

// Create Book object using constructor
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", 1925);
echo "Book 1 created: " . $book1->getDetails() . "\n\n";

// Create another book with partial information
$book2 = new Book("", "", 0);
$book2->setTitle("To Kill a Mockingbird");
$book2->setAuthor("Harper Lee");
$book2->setYear(1960);
echo "Book 2 details (using setters): " . $book2->getDetails() . "\n\n";

// Create a book with no initial values
$book3 = new Book();
echo "Book 3 (empty): " . $book3->getDetails() . "\n";

// Use setters to update book3
$book3->setTitle("1984");
$book3->setAuthor("George Orwell");
$book3->setYear(1949);
echo "Book 3 (updated): " . $book3->getDetails() . "\n\n";

echo "2. Testing setter and getter methods:\n";
echo "====================================\n";

// Test setters and getters
$book4 = new Book("Pride and Prejudice", "Jane Austen", 1813);
echo "Original: " . $book4->getDetails() . "\n";

// Update using setters
$book4->setTitle("Sense and Sensibility");
$book4->setYear(1811);
echo "Updated: " . $book4->getDetails() . "\n";

// Test individual getters
echo "Individual properties:\n";
echo "- Title: " . $book4->getTitle() . "\n";
echo "- Author: " . $book4->getAuthor() . "\n";
echo "- Year: " . $book4->getYear() . "\n\n";

echo "3. Testing year validation:\n";
echo "===========================\n";

$book5 = new Book("Test Book", "Test Author", 2023);
echo "Initial year (2023): " . $book5->getYear() . "\n";

// Test invalid year
$book5->setYear(2500); // Future year beyond reasonable range
echo "After trying to set year to 2500: " . $book5->getYear() . " (unchanged)\n";

// Test valid year update
$book5->setYear(2024);
echo "After setting year to 2024: " . $book5->getYear() . "\n\n";

echo "4. Creating an array of books:\n";
echo "==============================\n";

// Create multiple books
$library = [
    new Book("Harry Potter and the Philosopher's Stone", "J.K. Rowling", 1997),
    new Book("The Hobbit", "J.R.R. Tolkien", 1937),
    new Book("The Catcher in the Rye", "J.D. Salinger", 1951),
    new Book("Moby-Dick", "Herman Melville", 1851)
];

echo "Library Collection:\n";
foreach ($library as $index => $book) {
    echo ($index + 1) . ". " . $book->getDetails() . "\n";
}

echo "\n";

echo "5. Demonstrating object modification:\n";
echo "====================================\n";

// Modify an existing book
$bookToModify = new Book("Original Title", "Original Author", 2000);
echo "Before modification: " . $bookToModify->getDetails() . "\n";

// Apply multiple changes
$bookToModify->setTitle("New and Improved Title");
$bookToModify->setAuthor("Famous Writer");
$bookToModify->setYear(2023);

echo "After modification: " . $bookToModify->getDetails() . "\n";

// Display all books in a formatted way
echo "\n6. Final Book Collection Summary:\n";
echo "=================================\n";
$books = [$book1, $book2, $book3, $book4, $book5, $bookToModify];
foreach ($books as $index => $book) {
    $details = $book->getDetails();
    echo "Book " . ($index + 1) . ": $details\n";
}
?>