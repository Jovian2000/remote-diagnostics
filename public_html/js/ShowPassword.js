const passwordInput = document.getElementById('password');
const passwordCheck = document.getElementById('passwordCheck');
const showPasswordButton = document.getElementById('show-password-btn');
showPasswordButton.addEventListener('click', function() {
    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        passwordCheck.type = 'text';
        showPasswordButton.textContent = 'Hide Password';
    } else {
        passwordInput.type = 'password';
        passwordCheck.type = 'password';
        showPasswordButton.textContent = 'Show Password';
    }
});