// require('./bootstrap');

// import Alpine from 'alpinejs';

// window.Alpine = Alpine;

// Alpine.start();

// // alert('hi');



require('./bootstrap');

import { createApp } from 'vue'
import ExampleComponent from './components/ExampleComponent.vue'
import RealTimeSearch from './components/RealTimeSearch.vue'
import GlideSlider from './components/GlideSlider.vue'

//Icons
import IconBack from './components/icons/IconBack.vue'
import IconHome from './components/icons/IconHome.vue'
import IconInfo from './components/icons/IconInfo.vue'
import IconSearch from './components/icons/IconSearch.vue'
import IconUser from './components/icons/IconUser.vue'
import IconService from './components/icons/IconService.vue'
import IconEmpty from "./components/icons/IconEmpty.vue"
import IconAdd from "./components/icons/IconAdd.vue"

createApp({
    components: {
        ExampleComponent,
        RealTimeSearch,
        GlideSlider,
        IconBack,
        IconHome,
        IconInfo,
        IconSearch,
        IconUser,
        IconService,
        IconEmpty,
        IconAdd
    }
}).mount('#app')
