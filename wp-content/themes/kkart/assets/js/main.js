console.log('hi, welcome to my site');

// when you click the hambuger menu
// toggle the class of open to show the list items

document.querySelector('.hamburger').addEventListener('click', function() {
    console.log('burger has been clicked');
    document.querySelector('.hamburger').classList.toggle('open');
    document.querySelector('.hamburger').classList.toggle('mobileMenu');
    document.querySelector('#menu-nav-menu').classList.toggle('show');
})