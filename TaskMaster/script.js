const logerBox = document.querySelector('.logreg-box');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');

registerLink.addEventListener('click', () => {
    logerBox.classList.add('active');
});

loginLink.addEventListener('click', () => {
    logerBox.classList.remove('active');
});