const menu = document.querySelector('#mobile-menu');
const menuLinks = document.querySelector('.MenuOptions');

menu.addEventListener('mouseenter', function(){
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
})

menu.addEventListener('mouseleave', function(){
    menu.classList.toggle('is-active');
    menuLinks.classList.toggle('active');
})
