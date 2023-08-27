// require('./bootstrap');

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

// // alert('hi');



require('./bootstrap');

import { createApp } from 'vue'
import ExampleComponent from './components/ExampleComponent.vue'
import IconBack from './components/icons/IconBack.vue'


createApp({
    components: {
        ExampleComponent,
        IconBack
    }
}).mount('#app')
