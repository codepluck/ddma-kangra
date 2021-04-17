<template>
    <div class="wrapper">
        <notifications></notifications>
        <div class="main-content">
            <dashboard-navbar :type="$route.meta.navbarType"></dashboard-navbar>
            <div>
                <fade-transition :duration="200" origin="center top" mode="out-in">
                    <!-- your content here -->
                    <router-view></router-view>
                </fade-transition>
            </div>
            <content-footer></content-footer>
        </div>
    </div>
</template>
<script>

import DashboardNavbar from './Navbar';
import ContentFooter from './Footer';
import DashboardContent from './Content.vue';
import {FadeTransition} from 'vue2-transitions';

export default {
    components: {
        DashboardNavbar,
        ContentFooter,
        DashboardContent,
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
