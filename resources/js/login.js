document.addEventListener('DOMContentLoaded', () => {
    const showPassword = document.getElementById('showPassword');
    const passwordInput = document.querySelector('input[name="password"]');

    showPassword.addEventListener('click', function() {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.querySelector('i').classList.toggle('fa-eye');
    this.querySelector('i').classList.toggle('fa-eye-slash');
    });
});