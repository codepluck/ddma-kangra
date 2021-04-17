<template>
    <footer class="dd-section dd-footer w-100 float-left">
        <section class="footer-top footer-section">
            <b-container>
                <b-row class="justify-content-md-center">
                    <b-col col lg="10">
                        <b-nav align="center" class="nav-footer justify-content-center my-0 py-3">
                            <b-nav-item href="#">Desaster Relief</b-nav-item>
                            <b-nav-item href="#">Ngo Corner</b-nav-item>
                            <b-nav-item href="#">Public Corner</b-nav-item>
                            <b-nav-item href="#">Resources List</b-nav-item>
                            <b-nav-item href="#">Inventory</b-nav-item>
                            <b-nav-item href="#">Library</b-nav-item>
                        </b-nav>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="section-footer footer-middle bg-x">
            <b-container>
                <b-row>
                    <b-col>
                        <section class="d-block w-100 my-4 py-2 m3">
                            <h4 class="px-3 text-uppercase">About DDMA</h4>
                            <b-navbar class="px-0" toggleable="lg" type="white" variant="none">
                                <b-navbar-nav class="footer-nav">
                                    <b-nav-item
                                        v-if="footerMenus.footer_one.length > 0"
                                        v-for="menu in footerMenus.footer_one"
                                        href="#"
                                        :key="menu.id"
                                    >{{ menu.name }}
                                    </b-nav-item>
                                </b-navbar-nav>
                            </b-navbar>
                        </section>
                    </b-col>
                    <b-col>
                        <section class="d-block w-100 my-4 py-2 m3">
                            <h4 class="px-3 text-uppercase">Media News</h4>
                            <b-navbar class="px-0" toggleable="lg" type="white" variant="none">
                                <b-navbar-nav class="footer-nav">
                                    <b-nav-item
                                        v-if="footerMenus.footer_two.length > 0"
                                        v-for="menu in footerMenus.footer_two"
                                        href="#"
                                        :key="menu.id"
                                    >{{ menu.name }}
                                    </b-nav-item>
                                </b-navbar-nav>
                            </b-navbar>
                        </section>
                    </b-col>
                    <b-col>
                        <section class="d-block w-100 my-4 py-2 m3">
                            <h4 class="px-3 text-uppercase">Services</h4>
                            <b-navbar class="px-0" toggleable="lg" type="white" variant="none">
                                <b-navbar-nav class="footer-nav">
                                    <b-nav-item
                                        v-if="footerMenus.footer_three.length > 0"
                                        v-for="menu in footerMenus.footer_three"
                                        href="#"
                                        :key="menu.id"
                                    >{{ menu.name }}
                                    </b-nav-item>
                                </b-navbar-nav>
                            </b-navbar>
                        </section>
                    </b-col>
                    <!--                    <b-col>-->
                    <!--                        <section class="d-block w-100 my-4 py-2 m3">-->
                    <!--                            <h3 class="pX-2 text-uppercase">Latest Updates</h3>-->
                    <!--                            <div class="d-block mt-3 pt-3">-->
                    <!--                                <b-img class="image-video"-->
                    <!--                                       height="200" thumbnail-->
                    <!--                                       fluid src="https://picsum.photos/250/250/?image=54"-->
                    <!--                                       alt="Video"></b-img>-->
                    <!--                            </div>-->
                    <!--                        </section>-->
                    <!--                    </b-col>-->
                    <b-col>
                        <section class="d-block w-100 my-4 py-2 m3">
                            <h4 class="px-3 text-uppercase">Contact Information</h4>
                            <b-nav align="center" class="nav-footer justify-content-lg-end mt-3 pt-3">
                                <b-nav-item href="#" target="_blank" class="w-100">
                                    <i class="la la-facebook"></i> +91 99999-99999
                                </b-nav-item>
                                <b-nav-item href="#" target="_blank" class="w-100">
                                    <i class="las la-envelope-open"></i> ddma-hp@gov.in
                                </b-nav-item>
                                <b-nav-item href="#" target="_blank" class="w-100">
                                    <i class="lab la-facebook"></i> Facebook
                                </b-nav-item>
                                <b-nav-item href="#" target="_blank" class="w-100">
                                    <i class="lab la-twitter"></i> Twitter
                                </b-nav-item>
                                <b-nav-item href="#" target="_blank" class="w-100">
                                    <i class="lab la-youtube"></i> Youtube
                                </b-nav-item>
                            </b-nav>
                        </section>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="footer-bottom footer-section">
            <b-container>
                <b-row class="py-2">
                    <b-col>
                        <b-nav align="center" class="nav-footer justify-content-lg-start">
                            <b-nav-item href="#" target="_blank">
                                Contact Us
                            </b-nav-item>
                            <b-nav-item href="#" target="_blank">
                                Inventory
                            </b-nav-item>
                            <b-nav-item href="#" target="_blank">
                                Tendor
                            </b-nav-item>
                        </b-nav>
                    </b-col>
                    <b-col>
                        <div align="center" class="nav-footer justify-content-lg-start  py-2 ">
                            <h5 class="text-right copyright-text mb-0">
                                Copyright &copy; DDMA Kangra 2021
                            </h5>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </footer>
</template>
<script>
export default {
    data() {
        return {
            year: new Date().getFullYear(),
            settings: [],
            footerMenus: []
        };
    },
    methods: {
        getFooterMenus: function () {
            axios.get('/api/menus')
                .then((response) => {
                    this.footerMenus = response.data;
                }).catch((error) => {
            });
        },
    },
    mounted() {
        // get header menus
        this.getFooterMenus();
    }
};
</script>
<style>

.section-footer .footer-nav {
    flex-direction: column;
}

.footer-nav li a {
    display: block;
    transition: .5s all;
}

.footer-nav li a:hover {
    text-decoration: underline;
    transition: .5s all;
}

.bg-x {
    background-color: #eaf0f6;
}
</style>
