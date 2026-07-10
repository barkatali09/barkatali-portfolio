import './bootstrap';

import './hero';

import './particles';
import AOS from 'aos';
import 'aos/dist/aos.css';
import './navbar';
import './scroll';
import './backtotop';

AOS.init({

    duration: 1000,

    once: true,

    easing: 'ease-in-out'

});
