$(document).ready(function () {
  $("#SignupForm").submit(function (e) {
    e.preventDefault(); // Prevent form submission

    // Reset error messages
    $("#emailError, #passwordError, #confirmPasswordError").text("");

    // Retrieve input values
    let email = $("#email").val();
    let password = $("#password").val();
    let confirmPassword = $("#confirmPassword").val();

    // Regular expressions for validation
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    let passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/;

    // Validate email
    if (!emailRegex.test(email)) {
      $("#emailError").text("Invalid email address");
    }

    // Validate password
    if (!password) {
      $("#passwordError").text("Password field must not be empty");
    } else if (!passwordRegex.test(password)) {
      $("#passwordError").text(
        "Password must be 6-20 characters long, contain at least one digit, one lowercase letter, and one uppercase letter"
      );
    }

    // Validate confirm password
    if (password !== confirmPassword) {
      $("#confirmPasswordError").text("Passwords do not match");
    }
  });
});
