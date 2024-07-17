//active navbar
let nav = document.querySelector('.navigation-wrap');
window.onscroll = function () {
    if (document.documentElement.scrollTop > 20) {
        nav.classList.add('on-scroll');
    } else {
        nav.classList.remove('on-scroll');
    }
}

//nav hide
let navbar = document.querySelectorAll('.nav-link');
let navCollapse = document.querySelector('.navbar-collapse.collapse');
navbar.forEach(function (a) {
    a.addEventListener('click', function () {
        navCollapse.classList.remove('show');
    })
})