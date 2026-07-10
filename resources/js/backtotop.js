const button = document.getElementById('backToTop');

if (button) {

    window.addEventListener('scroll', () => {

        if (window.scrollY > 300) {

            button.style.display = 'flex';

        } else {

            button.style.display = 'none';

        }

    });

    button.addEventListener('click', () => {

        window.scrollTo({

            top: 0,

            behavior: 'smooth'

        });

    });

}