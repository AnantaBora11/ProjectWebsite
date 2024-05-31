const LoginBtn = document.querySelector("#login");
const registerBtn = document.querySelector("#register");
const LoginForm = document.querySelector(".login-form");
const registerForm = document.querySelector(".register-form");

LoginBtn.addEventListener('click', () => {
    LoginBtn.style.backgroundColor="#21264D";
    registerBtn.style.backgroundColor="rgba(255, 255, 255, 0.2)";

    LoginForm.style.left = "50%";
    registerForm.style.left = "-50%";

    LoginForm.style.opacity=1;
    registerForm.style.opacity=0;

    document.querySelector(".col-1").style.borderRadius="0 30% 20% 0";
})

registerBtn.addEventListener('click', () => {
    LoginBtn.style.backgroundColor="rgba(255, 255, 255, 0.2)";
    registerBtn.style.backgroundColor="#21264D";

    LoginForm.style.left = "150%";
    registerForm.style.left = "50%";

    LoginForm.style.opacity=0;
    registerForm.style.opacity=1;

    document.querySelector(".col-1").style.borderRadius="0 20% 30% 0";
})