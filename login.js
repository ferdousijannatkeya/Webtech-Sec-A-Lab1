document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const roleSelect = document.getElementById('roleSelect');

    loginForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Stop the form from actually submitting to a server

        const selectedRole = roleSelect.value;
        const username = document.getElementById('username').value;
        // In a real app, you'd validate username/password with a backend here.

        console.log(`Logging in as ${selectedRole} with username ${username}`);

        // Simulated redirection based on role
        switch(selectedRole) {
            case 'student':
                window.location.href = 'student_dashboard.html';
                break;
            case 'faculty':
                window.location.href = 'faculty_dashboard.html';
                break;
            case 'admin':
                window.location.href = 'admin_dashboard.html';
                break;
            case 'alumni':
                window.location.href = 'alumni_dashboard.html';
                break;
            default:
                alert('Invalid role selected');
        }
    });
});