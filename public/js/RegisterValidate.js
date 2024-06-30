// RegisterValidate.js
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    event.preventDefault();
    if (validateForm()) {
        alert('Form is valid and ready to be submitted!');
        // You can proceed with form submission here if needed
        // this.submit();
    }
});

function validateForm() {
    let isValid = true;

    // Validate username
    const usernameInput = document.getElementById('username');
    const usernameError = document.getElementById('usernameError');
    const username = usernameInput.value.trim();
    const minLength = 3;
    const maxLength = 15;
    const usernameRegex = /^[a-zA-Z0-9_]+$/;

    if (username.length < minLength || username.length > maxLength) {
        usernameError.textContent ='Username must be between ${minLength} and ${maxLength} characters.';
        isValid = false;
    } else if (!usernameRegex.test(username)) {
        usernameError.textContent = 'Username can only contain letters, numbers, and underscores.';
        isValid = false;
    } else {
        usernameError.textContent = '';
    }

    // Validate email
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const email = emailInput.value.trim();
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
        emailError.textContent = 'Please enter a valid email address.';
        isValid = false;
    } else {
        emailError.textContent = '';
    }

    // Validate password
    const passwordInput = document.getElementById('password');
    const passwordError = document.getElementById('passwordError');
    const password = passwordInput.value.trim();
    const passwordMinLength = 8;

    if (password.length < passwordMinLength) {
        passwordError.textContent = 'Password must be at least ${passwordMinLength} characters long.';
        isValid = false;
    } else {
        passwordError.textContent = '';
    }

    return isValid;
}