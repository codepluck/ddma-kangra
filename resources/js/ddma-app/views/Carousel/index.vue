<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <carousel v-if="imgData.length > 0">
                            <div v-for="(slide, index) in imgData" :key="index">
                                <img :src="slide.image" :alt="slide.title">
                            </div>
                        </carousel>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import carousel from 'vue-owl-carousel'

export default {
    name: 'Carousel',
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
    mounted() {
        axios
            .get('carousel')
            .then(res => {
                this.imgData = res.data;
            });
    }
}
</script>
