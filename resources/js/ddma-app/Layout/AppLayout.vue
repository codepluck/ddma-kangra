<template>
    <div class="wrapper">
        <app-navbar></app-navbar>
        <notifications></notifications>
        <div class="main-content">
            <fade-transition :duration="200" origin="center top" mode="out-in">
                <router-view></router-view>
            </fade-transition>
            <app-footer></app-footer>
        </div>
    </div>
</template>
<script>
import "@/assets/vendor/line-awesome/css/line-awesome.css";

import AppNavbar from './Header';
import AppFooter from './Footer/';
import AppContent from './Content.vue';
import AppBaseNav from './Navbar/BaseNav';
import {FadeTransition} from 'vue2-transitions';
export default {
    components: {
        AppNavbar,
        AppBaseNav,
        AppFooter,
        AppContent,
        FadeTransition
    },
    methods: {
        initScrollbar() {
            let isWindows = navigator.platform.startsWith('Win');
            if (isWindows) {
                initScrollbar('sidenav');
            }
        }
    },
    mounted() {
        this.initScrollbar()
    }
};
</script>
<style lang="scss">
</style>
