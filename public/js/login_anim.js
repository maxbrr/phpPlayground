const loginForm = document.getElementById('login-form');
const loginBtn = document.getElementById('login-btn');
let formIsVisible = false;

function toggleLoginForm() {
  if(!formIsVisible) {
    loginForm.style.transform = 'translateY(0%)'
    formIsVisible = true;
  } else {
    loginForm.style.transform = 'translateY(-100%)'
    formIsVisible = false;
  }
}

loginBtn.addEventListener('click',() => {
  toggleLoginForm();
});