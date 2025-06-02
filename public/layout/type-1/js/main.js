// Custom Bootstrap JavaScript

document.addEventListener('DOMContentLoaded', function () {
    const toggleBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobileTopMenu');
    if (toggleBtn && mobileMenu) {
        toggleBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            mobileMenu.classList.toggle('open');
        });
        // Optional: close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (!toggleBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.remove('open');
            }
        });
    }

    var topMenu = document.getElementById('topMenu');
    var lastScroll = 0;
    var menuHeight = topMenu.offsetHeight;
    window.addEventListener('scroll', function () {
        if (window.scrollY > menuHeight) {
            if (!topMenu.classList.contains('fixed')) {
                topMenu.classList.add('fixed');
                document.body.classList.add('menu-fixed');
            }
        } else {
            if (topMenu.classList.contains('fixed')) {
                topMenu.classList.remove('fixed');
                document.body.classList.remove('menu-fixed');
            }
        }
    });

});
