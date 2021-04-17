<template>
    <!--===Section Who We Are===-->
    <section class="dd-section-who">
        <section class="section-title">
            <b-container>
                <b-row>
                    <b-col class="text-center">
                        <h3 class="title">Who we are?</h3>
                        <h5>Lorem ipsum the dolor sit</h5>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="section-members">
            <b-container>
                <section class="section-members-inner">
                    <b-row>
                        <b-col lg="6" md="6" sm="12" xs="12">
                            <b-row class="mt-4 justify-content-around">
                                <b-card class="dd-member" v-if="members.length > 0" v-for="member in members"
                                        :key="member.id">
                                    <!-- Card body -->
                                    <b-row align-v="center">
                                        <div>
                                            <!-- Avatar -->
                                            <a href="javascript:;" class="avatar avatar-xl rounded-circle">
                                                <!--                        <img alt="member-one" :src="member.avatar">-->
                                                <i class="la la-user-alt"></i>
                                            </a>
                                        </div>
                                        <div class="pl-2">
                                            <h6 class="mb-0">
                                                <a href="javascript:;">{{ member.name }}</a>
                                            </h6>
                                            <p class="text-sm mb-0">{{ member.position }}</p>
                                            <p>
                                                <a href="#"><strong><small><i
                                                    class="la la-facebook"></i>Facebook</small></strong></a>
                                                <a href="#"><strong><small><i class="la la-twitter"></i>Twitter</small></strong></a>
                                            </p>
                                        </div>
                                    </b-row>
                                </b-card>
                            </b-row>
                        </b-col>
                        <b-col lg="6" md="6" sm="12" xs="12">
                            <b-row>
                                <b-col>
                                    <h6 class="bold">Recent News</h6>
                                </b-col>
                            </b-row>
                            <b-row>
                                <b-col v-for="news in news" :key="news.id">
                                    <section class="news">
                                        <div class="image w-100 p-1">
                                            <img :src="news.image"/>
                                        </div>
                                        <div class="title w-100 p-1">
                                            <h6>{{ news.title }}</h6>
                                        </div>
                                        <div class="date w-100 p-1">
                                            <span>{{ news.date }}</span>
                                        </div>
                                    </section>
                                </b-col>
                            </b-row>
                        </b-col>
                    </b-row>
                </section>
            </b-container>
        </section>
        <section class="section-vision">
            <b-container>
                <b-row>
                    <b-col lg="6" md="6" sm="12" xs="12">
                        <b-row class="mb-5">
                            <b-col lg="6" md="6" sm="12" xs="12">
                                <base-button type="primary">
                                    <i class="la la-phone"></i>
                                    State Emergency Operation Centre
                                    1070</base-button>
                            </b-col>
                            <b-col lg="6" md="6" sm="12" xs="12">
                                <base-button type="primary">Control Room</base-button>
                            </b-col>
                        </b-row>
                        <b-row class="my-5">
                            <b-col lg="6" md="6" sm="12" xs="12">
                                <base-button type="primary">Weather Visit</base-button>
                            </b-col>
                            <b-col lg="6" md="6" sm="12" xs="12">
                                <base-button type="primary">COVID-19 Updates</base-button>
                            </b-col>
                        </b-row>
                        <b-row class="my-5">
                            <b-col lg="6" md="6" sm="12" xs="12">
                                <base-button type="primary">Weather Visit</base-button>
                            </b-col>
                            <b-col lg="6" md="6" sm="12" xs="12">
                                <base-button type="primary">COVID Updates</base-button>
                            </b-col>
                        </b-row>
                    </b-col>
                    <b-col lg="6" md="6" sm="12" xs="12">
                        <div class="v-vision v-white">
                            <h6 class="title">Our Vision</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam deserunt dicta
                                doloribus iure
                                maiores odit optio quae, quos sit vero. Amet aut dolorum esse illo laborum perspiciatis
                                provident quo
                                reiciendis.
                            </p>
                        </div>
                        <div class="v-mission v-white">
                            <h6 class="title">Our Mission</h6>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam deserunt dicta
                                doloribus iure
                                maiores odit optio quae, quos sit vero. Amet aut dolorum esse illo laborum perspiciatis
                                provident quo
                                reiciendis.
                            </p>
                        </div>
                    </b-col>
                </b-row>
            </b-container>
        </section>
    </section>
    <!--===Section Who We Are End===-->
</template>

<script>

export default {
    name: 'Members',
    data() {
        return {
            members: [],
            news: [],
        };
    },
    methods: {
        getMembers: function (count) {
            axios
                .get('api/members', {params: {limit: count}})
                .then(response => {
                    this.members = response.data;
                });
        },
        getPosts: function (count) {
            axios
                .get('api/posts', {params: {limit: count}})
                .then(response => {
                    this.news = response.data;
                });
        }
    },
    mounted: function () {
        this.getMembers(5);
    },
}
</script>
<style>
.dd-section-who {
    float: left;
    width: 100%;
    padding: 2rem;
}

.dd-section-who .section-members {
    float: left;
    width: 100%;
}

.dd-section-who .section-vision {
    float: left;
    width: 100%;
    padding: 2rem 0;
}

.dd-section-who .section-title {
    float: left;
    width: 100%;
    padding: 2rem;
}

.dd-member {
    background: #3E908A;
    color: #fff;
}

.dd-member a,
.dd-member p,
.dd-member h5 {
    color: #fff;
}

.dd-member h5 {
    font-weight: 600;
}

.dd-member .card-body p {
    margin-bottom: 0;
    font-size: 14px;
}

.dd-member .card-body {
    padding: .6rem 2.4rem;
}

.section-members-inner {
    border-radius: 6px;
    background: #E6F4F1;
    padding: 1rem;
    margin-bottom: 2rem;
    margin-top: 2rem;
}

.v-vision, .v-mission {
    background: #fff;
    padding: 1.2rem;
    border-radius: 6px;
    margin-bottom: 2rem;
}

.v-vision p, .v-mission p {
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 600;
}

.v-vision .title, .v-mission .title {
    text-decoration: underline;
    text-transform: uppercase;
    font-weight: bold;
}

.section-members-inner .avatar-xl {
    width: 64px;
    height: 64px;
}

.section-members-inner .avatar-xl img {
    height: 64px;
    width: 64px;
    border-radius: 100%;
}

.avatar {
    font-size: 1rem;
    display: inline-flex;
    color: #fff;
    border-radius: .375rem;
    background-color: #adb5bd;
    align-items: center;
    justify-content: center;
}

.news .image img {
    height: 120px;
    width: 100%;
    border-radius: 5px;
}

.news .title h6 {
    font-weight: bold;
    margin-top: 10px;
}

.news .date {
    font-size: 15px;
}
</style>
