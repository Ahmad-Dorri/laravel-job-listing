import axios from 'axios';
import Alpine from 'alpinejs'
import Intersect from '@alpinejs/intersect'
import menu from './menu.js';

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


Alpine.data('menu', menu);
Alpine.plugin(Intersect)

Alpine.start()

window.Alpine = Alpine

