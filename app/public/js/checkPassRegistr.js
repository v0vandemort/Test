const form = document.getElementById('loginForm');
const loginInput = document.getElementById('login');
const passwordInput = document.getElementById('passwordConfirm');
const passwordConfirmInput = document.getElementById('passwordConfirmRepeat');
const messageLabel = document.getElementById('message');

form.addEventListener('submit', function(event) {
    event.preventDefault();
    validateForm();
});

passwordInput.addEventListener('blur', function() {
    // Проверка ввода пароля при потере фокуса
    validateForm();
});

passwordInput.addEventListener('blur', function() {
    // Проверка ввода пароля при потере фокуса
    validateForm();
});

function validateForm() {
    if (passwordConfirmInput==passwordInput){
        messageLabel="Пароли совпадают"

    }


}