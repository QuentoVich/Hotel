window.addEventListener('click', function(e) {
    if (!document.querySelector('nav').contains(e.target)) {
        var subMenus = document.querySelectorAll('ul ul');
        subMenus.forEach(function(menu) {
            menu.style.display = 'none';
            menu.style.opacity = 0;
            menu.style.visibility = 'hidden';
        });
    }
});