const menuButton = document.querySelector('#menuButton');
const mobileNavbar = document.querySelector('#mobile-navbar');

menuButton.addEventListener('click', function () {
    mobileNavbar.classList.toggle('hidden');
});

