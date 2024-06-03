document.addEventListener('DOMContentLoaded', function() {
    const loginBtn = document.getElementById('loginBtn');
    const signupBtn = document.getElementById('signupBtn');
    const formBody = document.querySelector('.form-body');
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');

    loginBtn.addEventListener('click', () => {
        loginBtn.classList.add('active');
        signupBtn.classList.remove('active');
        formBody.style.transform = 'translateX(0)';
        loginForm.style.opacity = '1';
        signupForm.style.opacity = '0';
        setTimeout(() => {
            loginForm.style.visibility = 'visible';
            signupForm.style.visibility = 'hidden';
        }, 300);
    });

    signupBtn.addEventListener('click', () => {
        signupBtn.classList.add('active');
        loginBtn.classList.remove('active');
        formBody.style.transform = 'translateX(-50%)';
        signupForm.style.opacity = '1';
        loginForm.style.opacity = '0';
        setTimeout(() => {
            signupForm.style.visibility = 'visible';
            loginForm.style.visibility = 'hidden';
        }, 300);
    });
});
