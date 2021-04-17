<template>
    <!--===Section Important Links===-->
    <section class="dd-section-links">
        <section class="section-title">
            <b-container>
                <b-row class="mt-5">
                    <b-col class="text-center">
                        <h3 class="title">Important Links</h3>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="section-links">
            <b-container fluid>
                <b-row class="justify-content-md-center">
                    <b-col col lg="10">
                        <ul v-if="links.length > 0" class="link-slides justify-content-center">
                            <li
                                v-for="link in links"
                                href="#"
                                :key="link.id"
                            >
                                <a target="_blank" :href="link.link">
                                    <b-img fluid :src="'storage/'+link.image"
                                           :alt="link.title"></b-img>
                                </a>
                            </li>
                        </ul>
                        <ul v-else class="link-slides justify-content-center">
                            <li>No Links Found</li>
                        </ul>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </section>
    <!--===Section Important Links End===-->
</template>
<script>
export default {
    components: {},
    data() {
        return {
            links: []
        };
    },
    methods: {
        getImportantLinks: function () {
            axios.get('/api/links')
                .then((response) => {
                    this.links = response.data;
                }).catch((error) => {
                this.headerMenu = [];
            });
        },
    },
    mounted() {
        // get important links
        this.getImportantLinks();
    }
};
</script>
<style>
.dd-section-links {
    float: left;
    width: 100%;
    background: #fff;
    padding: 2rem;
}

.link-slides {
    display: flex;
    margin-top: 3rem;
    padding: 0;
    list-style: none;
}

.link-slides li {
    margin-left: 1rem;
    margin-right: 1rem;
}

.link-slides li img {
    height: 64px;
    /*width: 140px;*/
}

</style>
