<template>
    <section class="w-100 float-left">

        <!--App Slider-->
        <app-slider></app-slider>
        <!--App Slider-->

        <!--===Section Who We Are===-->
        <app-members></app-members>
        <!--===Section Who We Are End===-->

        <!--=== Section Hazard Analysis ===-->
        <app-safety></app-safety>
        <!--=== Section Hazard Analysis End ===-->

        <!--=== Section Plans  ===-->
        <app-plans></app-plans>
        <!--=== Section Plans End ===-->

        <!--===Section Blogs===-->
        <app-updates></app-updates>
        <!--===Section Blogs End===-->


        <!--===Section Important Links===-->
        <app-links></app-links>
        <!--===Section Important Links End===-->

    </section>
</template>
<script>

import AppSlider from '@/views/Slider'
import AppMembers from '@/views/Members'
import AppSafety from '@/views/Safety'
import AppPlans from '@/views/Plans'
import AppUpdates from '@/views/Updates'
import AppLinks from '@/views/Links'

export default {
    components: {
        AppSlider,
        AppMembers,
        AppSafety,
        AppPlans,
        AppUpdates,
        AppLinks
    },
    data() {
        return {};
    },
    methods: {},
    mounted() {
    }
};
</script>
<style>
.el-table .cell {
    padding-left: 0px;
    padding-right: 0px;
}
</style>
