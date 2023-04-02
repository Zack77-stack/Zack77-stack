// toggle class active
const navbarNav = document.querySelector('.navbar-nav');

//ketika hamburger menu di klick
document.querySelector('#hamburger-menu').onclick = () => {
  navbarNav.classList.toggle('active');
};

//Click di luar sidebar untuk menghilangkan nav
const hamburger = document.querySelector('#hamburger-menu');

document.addEventListener('click', function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove('active');
  }
});
