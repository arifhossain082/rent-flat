var login_btn = document.querySelector('.login-header-btn'),
    login_sec = document.querySelector('.login_section');

login_btn.addEventListener("click",login);

function login(){
  login_sec.classList.toggle("mystyle_login");
}
