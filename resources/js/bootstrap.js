const button = document.getElementById('backToTop');

window.addEventListener('scroll', () => {

    if (!button) return;

    if (window.scrollY > 300) {

        button.style.display = 'flex';

    } else {

        button.style.display = 'none';

    }

});

if (button) {

    button.addEventListener('click', () => {

        window.scrollTo({

            top: 0,

            behavior: 'smooth'

        });

    });

}