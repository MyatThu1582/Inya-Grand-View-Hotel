/* =====================================================
   MOBILE NAVIGATION
===================================================== */

document.addEventListener('DOMContentLoaded', () => {

    const menuToggle = document.querySelector('[data-menu-toggle]');
    const mobileMenu = document.querySelector('[data-mobile-menu]');

    if (!menuToggle || !mobileMenu) {
        return;
    }

    menuToggle.addEventListener('click', () => {

        const isExpanded =
            menuToggle.getAttribute('aria-expanded') === 'true';

        menuToggle.setAttribute(
            'aria-expanded',
            String(!isExpanded)
        );

        mobileMenu.classList.toggle('hidden');

    });


    // Close menu after clicking a navigation link
    mobileMenu.querySelectorAll('a').forEach((link) => {

        link.addEventListener('click', () => {

            mobileMenu.classList.add('hidden');

            menuToggle.setAttribute(
                'aria-expanded',
                'false'
            );

        });

    });

});
