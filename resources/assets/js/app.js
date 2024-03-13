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
import IconBack from './components/icons/IconBack.vue'
import IconHome from './components/icons/IconHome.vue'
import IconInfo from './components/icons/IconInfo.vue'
import IconSearch from './components/icons/IconSearch.vue'
import IconUser from './components/icons/IconUser.vue'
import IconService from './components/icons/IconService.vue'
import IconEmpty from "./components/icons/IconEmpty.vue"
import IconAdd from "./components/icons/IconAdd.vue"
import IconDelete from "./components/icons/IconDelete.vue"
import IconEdit from "./components/icons/IconEdit.vue"
import IconShop from "./components/icons/IconShop.vue"
import IconInvoices from "./components/icons/IconInvoices.vue"
import IconArrowBold from "./components/icons/IconArrowBold.vue"
import IconRotate from "./components/icons/IconRotate.vue"




createApp({
    components: {
        ExampleComponent,
        RealTimeSearch,
        GlideSlider,
        OrdersPerMonthChart,
        OrdersPerService,
        AccountsTable,
        IconBack,
        IconHome,
        IconInfo,
        IconSearch,
        IconUser,
        IconService,
        IconEmpty,
        IconAdd,
        IconDelete,
        IconEdit,
        IconShop,
        IconInvoices,
        IconArrowBold,
        IconRotate,
    }
}).mount('#app')
