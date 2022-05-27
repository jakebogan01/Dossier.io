require('./bootstrap');

import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();

window.Alpine = Alpine;

Alpine.plugin(intersect)

Alpine.start();
