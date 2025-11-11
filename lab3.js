// validation.js

document.addEventListener("DOMContentLoaded", function () {
  const form = document.querySelector("form");

  form.addEventListener("submit", function (event) {
    let isValid = true;
    let messages = [];

    // Helper function to check required fields
    function checkRequired(id, fieldName) {
      const input = document.getElementById(id);
      if (!input.value.trim()) {
        isValid = false;
        messages.push(`${fieldName} is required.`);
        input.style.borderColor = "red";
      } else {
        input.style.borderColor = "";
      }
    }

    // ✅ Validate required fields
    checkRequired("firstName", "First Name");
    checkRequired("lastName", "Last Name");
    checkRequired("address1", "Address 1");
    checkRequired("city", "City");
    checkRequired("state", "State");
    checkRequired("zip", "Zip Code");
    checkRequired("country", "Country");
    checkRequired("email", "Email");

    // ✅ Validate email format
    const email = document.getElementById("email");
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email.value && !emailPattern.test(email.value)) {
      isValid = false;
      messages.push("Please enter a valid email address.");
      email.style.borderColor = "red";
    }

    // ✅ Validate ZIP
    const zip = document.getElementById("zip");
    const zipPattern = /^[0-9]{4,10}$/;
    if (zip.value && !zipPattern.test(zip.value)) {
      isValid = false;
      messages.push("Zip Code must be numeric (4–10 digits).");
      zip.style.borderColor = "red";
    }

    // ✅ Validate donation amount
    const amountRadios = document.querySelectorAll("input[name='amount']");
    const otherAmount = document.querySelector("input[name='otherAmount']");
    let amountSelected = false;

    amountRadios.forEach((radio) => {
      if (radio.checked && radio.value !== "none") {
        amountSelected = true;
      }
    });

    if (otherAmount.value.trim()) amountSelected = true;

    if (!amountSelected) {
      isValid = false;
      messages.push("Please select or enter a donation amount.");
    }

    // ✅ Handle result
    if (!isValid) {
      event.preventDefault();
      alert(messages.join("\n"));
    } else {
      event.preventDefault(); // Prevent actual form submission (for demo)
      alert("🎉 Donation done! Thank you for your generosity!");
      form.reset(); // optional: reset form after successful donation
    }
  });
});
