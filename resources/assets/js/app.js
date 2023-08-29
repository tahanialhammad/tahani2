// require('./bootstrap');

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

// // alert('hi');



require('./bootstrap');

import { createApp } from 'vue'
import ExampleComponent from './components/ExampleComponent.vue'
import IconBack from './components/icons/IconBack.vue'
import IconHome from './components/icons/IconHome.vue'
import IconInfo from './components/icons/IconInfo.vue'

createApp({
    components: {
        ExampleComponent,
        IconBack,
        IconHome,
        IconInfo
    }
}).mount('#app')
