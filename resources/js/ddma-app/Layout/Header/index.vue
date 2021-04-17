<template>
    <header class="dd-section dd-main-header">
        <section class="dd-section-top">
            <b-container>
                <b-row>
                    <b-col>
                        <b-navbar toggleable="lg" type="white" variant="none">
                            <b-navbar-nav class="nav-header-top">
                                <b-nav-item v-if="headerMenu.header_top.length > 0"
                                            v-for="menu in headerMenu.header_top"
                                            href="#"
                                            :key="menu.id"
                                >{{ menu.name }}
                                </b-nav-item>
                            </b-navbar-nav>
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
                        <b-navbar-nav class="logo-nav">
                            <b-nav-item class="header-logo logo-left px-2 inline-block">
                                <img alt="ddma-logo" :src="'storage/'+ settings.logo">
                            </b-nav-item>
                        </b-navbar-nav>
                    </b-col>
                    <b-col>
                        <b-navbar-nav>
                            <b-nav-item class="header-logo logo-right">
                                <img class="float-right" alt="ddma-logo" :src="'storage/'+settings.logo_sec">
                            </b-nav-item>
                        </b-navbar-nav>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="dd-section-bottom">
            <b-navbar class="header-main-nav" toggleable="lg" type="primary" variant="primary">
                <b-container>
                    <b-row>
                        <b-col>
                            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
                            <b-collapse id="nav-collapse" is-nav>
                                <b-navbar-nav>
                                    <b-nav-item v-if="headerMenu.header_main.length > 0"
                                                v-for="menu in headerMenu.header_main"
                                                href="#"
                                                :key="menu.id"
                                    >{{ menu.name }}
                                    </b-nav-item>
                                </b-navbar-nav>
                            </b-collapse>
                        </b-col>
                    </b-row>
                </b-container>
            </b-navbar>
        </section>
    </header>
</template>
<script>
export default {
    components: {},
    data() {
        return {
            activeNotifications: false,
            showMenu: false,
            searchModalVisible: false,
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
.dd-section-top .nav-header-top a:hover {
    text-decoration: underline;
    transition: .5s all;
}
.dd-section-top .navbar {
    padding: .5rem;
}

.header-logo img {
    height: 50px
}

.header-main-nav {
    padding-top: .5rem;
    padding-bottom: .5rem;
}

.header-main-nav .navbar-nav li a {
    text-transform: uppercase;
    color: #fff;
    font-size: .8rem;
}
.header-main-nav .navbar-nav li a:hover {
    text-decoration: underline;
}
.logo-nav ul li a{
    display: inline-block;
}

</style>
