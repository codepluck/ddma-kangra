<template>
    <section class="dd-section-slider">
        <carousel
            :autoplay="true"
            :items="1"
            :responsive="{0:{items:1,nav:false},600:{items:1,nav:false}}"
            :nav="false" v-if="slides.length > 0">
            <div v-for="(slide, index) in slides" :key="index">
                <img :src="'storage/'+slide.image" :alt="slide.title">
            </div>
        </carousel>
    </section>
</template>

<script>
import carousel from 'vue-owl-carousel'

export default {
    name: 'Slider',
    components: {
        carousel
    },
    props: {
        msg: String
    },
    data() {
        return {
            slides: []
        }
    },
    methods: {
        getSlider: function () {
            axios
                .get('api/slides')
                .then(response => {
                    this.slides = response.data;
                }).catch(error => {
                console.log('error');
            });
        }
    },
    mounted() {
        this.getSlider()
    }
}
</script>
<style>
/*Slider*/
.dd-section-slider {
    float: left;
    width: 100%;
    min-height: 600px;
    position: relative;
}

.dd-section-slider .slide {
    min-height: 600px;
    height: 600px;
}

.dd-section-slider .slide img {
    height: 600px;
    width: 100%
}


.dd-section-slider .fade-enter-active,
.dd-section-slider .fade-leave-active {
    transition: all 0.9s ease;
    overflow: hidden;
    visibility: visible;
    position: absolute;
    width: 100%;
    opacity: 1;
}


.dd-section-slider .fade-enter,
.dd-section-slider .fade-leave-to {
    visibility: hidden;
    width: 100%;
    opacity: 0;
}

.dd-section-slider .prev,
.dd-section-slider .next {
    cursor: pointer;
    position: absolute;
    top: 40%;
    width: auto;
    padding: 16px;
    color: white;
    font-weight: bold;
    font-size: 16px;
    transition: 0.7s ease;
    border-radius: 0 4px 4px 0;
    text-decoration: none;
    user-select: none;
}

.dd-section-slider .owl-stage,
.dd-section-slider .owl-item {
    /*width: 100% !important*/
}

.dd-section-slider .owl-item img {
    width: 100% !important;
    height: 670px;
}

.dd-section-slider .next {
    right: 0;
}

.dd-section-slider .prev {
    left: 0;
}

.dd-section-slider .prev:hover,
.dd-section-slider .next:hover {
    background-color: rgba(0, 0, 0, 0.9);
}
</style>
