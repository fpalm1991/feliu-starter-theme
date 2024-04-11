"use strict";

document.addEventListener('DOMContentLoaded', () => {

    // Mobile Navigation
    const burgerMenu = document.querySelector('.main-navigation__burger');
    const mobileNavigation = document.querySelector('.main-navigation__mobile');
    const body = document.querySelector('body');

    burgerMenu.addEventListener('click', () => {
        console.log('clicked');
        mobileNavigation.classList.toggle('show');

        // Website not scrollable when mobile navigation is open
        body.classList.toggle('is-not-scrollable');
    });

});