<template>
    <header class="dd-section dd-main-header">
        <section class="dd-section-top">
            <b-container>
                <b-row>
                    <b-col>
                        <b-navbar class="nav-header-top" type="white" variant="none">
                            <router-link
                                v-if="headerMenu.header_top.length > 0"
                                v-for="menu in headerMenu.header_top"
                                :key="menu.id"
                                :to="{name: 'home'}"
                                class="navbar-brand">{{ menu.name }}
                            </router-link>
                        </b-navbar>
                    </b-col>
                    <b-col>
                        <b-navbar class="float-right" type="white" variant="none">
                            <b-navbar-nav class="dd-nav nav-header-top">
                                <b-nav-item :href="'callto:'+settings.phone">
                                    <strong><i class="la la-phone"></i>&nbsp;</strong><span>{{ settings.phone }}</span>
                                </b-nav-item>
                                <b-nav-item :href="'mailto:'+settings.email">
                                    <strong> <i class="las la-envelope-open-text"></i>&nbsp;</strong><span>{{
                                        settings.email
                                    }}</span>
                                </b-nav-item>
                            </b-navbar-nav>
                        </b-navbar>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="dd-section-middle p-3">
            <b-container>
                <b-row>
                    <b-col>
                        <a class="header-logo logo-left" href="#">
                            <img alt="ddma-logo" :src="'storage/'+ settings.logo">
                        </a>
                    </b-col>
                    <b-col>
                        <a class="header-logo logo-right" href="#">
                            <img class="float-right" alt="ddma-logo" :src="'storage/'+settings.logo_sec">
                        </a>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="dd-section-bottom">
            <base-nav
                container-classes="container"
                class="navbar-top navbar-expand bg-primary"
                :class="{'navbar-dark': type === 'default'}"
            >
                <!-- Navbar links -->
                <b-navbar-nav class="nav">
                    <router-link
                        v-if="headerMenu.header_main.length > 0"
                        v-for="menu in headerMenu.header_main"
                        :key="menu.id"
                        :to="{name: 'home'}"
                        class="navbar-brand">{{ menu.name }}
                    </router-link>
                </b-navbar-nav>
            </base-nav>
        </section>
    </header>
</template>
<script>
import {CollapseTransition} from 'vue2-transitions';
import {BaseNav, Modal} from '@/components';

export default {
    components: {
        CollapseTransition,
        BaseNav,
        Modal
    },
    props: {
        type: {
            type: String,
            default: 'default', // default|light
            description: 'Look of the dashboard navbar. Default (Green) or light (gray)'
        }
    },
    computed: {
        routeName() {
            const {name} = this.$route;
            return this.capitalizeFirstLetter(name);
        }
    },
    data() {
        return {
            activeNotifications: false,
            showMenu: false,
            searchModalVisible: false,
            searchQuery: '',
            headerMenu: [],
            settings: []
        };
    },
    methods: {
        capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        },
        toggleNotificationDropDown() {
            this.activeNotifications = !this.activeNotifications;
        },
        closeDropDown() {
            this.activeNotifications = false;
        },
        // get settings
        getSettings: function () {
            axios.get('/api/settings')
                .then((response) => {
                    this.settings = response.data;
                }).catch((error) => {
                this.settings = [];
            });
        },
        getHeaderMenus: function () {
            axios.get('/api/menus')
                .then((response) => {
                    this.headerMenu = response.data;
                }).catch((error) => {
                this.headerMenu = [];
            });
        },
    },
    mounted() {
        // get header menus
        this.getHeaderMenus();
        // get settings
        this.getSettings();
    }
};
</script>
<style>
.dd-section-top {
    position: relative;
    background-color: #f5f8fa;
    /*box-shadow: 0 1px 1px 0 rgb(45 62 80 / 12%), 0 3px 3px -1px rgb(45 62 80 / 12%);*/
    z-index: 7;
}

.dd-section-top .nav-header-top a {
    padding: 0 1rem;
    font-size: .75rem;
    color: #33475b
}

.dd-section-top .navbar {
    padding: .5rem;
}

.header-logo img {
    height: 50px
}
</style>
