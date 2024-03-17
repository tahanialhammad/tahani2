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
import OrdersPerMonthChart from './components/graphs/OrdersPerMonthChart.vue'
import OrdersPerService from './components/graphs/OrdersPerService.vue'
import AccountsTable from "./components/AccountsTable.vue"


//Icons
import IconInfo from './components/icons/IconInfo.vue'
import IconSearch from './components/icons/IconSearch.vue'
import IconUser from './components/icons/IconUser.vue'
import IconEmpty from "./components/icons/IconEmpty.vue"

// All in one 
import Icon from "./components/icons/Icon.vue"



createApp({
    components: {
        ExampleComponent,
        RealTimeSearch,
        GlideSlider,
        OrdersPerMonthChart,
        OrdersPerService,
        AccountsTable,
        IconInfo,
        IconSearch,
        IconUser,
        IconEmpty,
        // all in one
        Icon,
    }
}).mount('#app')
