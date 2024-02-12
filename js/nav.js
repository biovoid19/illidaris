let sections = document.querySelectorAll('section');
let navlinks = document.querySelectorAll('header nav div div ul li a');

// Función que hace el nav dinámico
window.onscroll = () => {
    sections.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop-150;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if (top >= offset && top < offset + height) {
            navlinks.forEach(links => {
                links.classList.remove('activo');
                let link = document.querySelector('header nav div div ul li a[href*=' + id + ']');
                if (link) {
                    link.classList.add('activo');
                }
            });
        }
    });
}