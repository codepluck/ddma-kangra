<template>
    <!--===Section Safety===-->
    <section class="dd-section-safety">
        <section class="section-title">
            <b-container>
                <b-row>
                    <b-col lg="10" class="text-center mx-auto mt-5 mb-5">
                        <h2 class="heading">Hazard Analysis of District Kangra</h2>
                        <p class="description">District Kangra is prone to various hazards both natural and manmade. In
                            the District the
                            geological hazard, mainly earthquakes, landslides and soil erosion are most critical, the
                            flash flood, cloud burst, drought and forest fire is also hydro metrological hazard.</p>
                    </b-col>
                </b-row>
            </b-container>
        </section>
        <section class="section-content pb-5">
            <b-container>
                <section class="safety-items">
                    <div class="grid-item">
                        <div class="grid-wrapper">
                            <h2 class="grid-icon stat-plus-after">
                                <i class="la la-building icon-spin-hover"></i>
                            </h2>
                            <a href="#" class="grid-description">Earthquake</a>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div class="grid-wrapper">
                            <h2 class="grid-icon stat-plus-after">
                                <i class="las la-fire icon-spin-hover"></i>
                            </h2>
                            <a href="#" class="grid-description">Fires Awareness</a>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div class="grid-wrapper">
                            <h2 class="grid-icon stat-plus-after">
                                <i class="las la-swimmer icon-spin-hover"></i>
                            </h2>
                            <a href="#" class="grid-description">Floods Safety</a>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div class="grid-wrapper">
                            <h2 class="grid-icon stat-plus-after">
                                <i class="las la-industry"></i>
                            </h2>
                            <a href="#" class="grid-description">Stampede & Industrial</a>
                        </div>
                    </div>


                    <div class="grid-item">
                        <div class="grid-wrapper">
                            <h2 class="grid-icon stat-plus-after">
                                <i class="las la-mountain icon-spin-hover"></i>
                            </h2>
                            <a href="#" class="grid-description">Landslide Safety</a>
                        </div>
                    </div>

                    <div class="grid-item">
                        <div class="grid-wrapper">
                            <h2 class="grid-icon stat-plus-after">
                                <i class="las la-cloud-showers-heavy icon-spin-hover"></i>
                            </h2>
                            <a href="#" class="grid-description">ColdWave Safety</a>
                        </div>
                    </div>


                    <div class="grid-item">
                        <div class="grid-wrapper">
                            <h2 class="grid-icon stat-plus-after">
                                <i class="las la-car-crash icon-spin-hover"></i>
                            </h2>
                            <a href="#" class="grid-description">Road Accidents</a>
                        </div>
                    </div>


                    <div class="grid-item">
                        <div class="grid-wrapper">
                            <h2 class="grid-icon stat-plus-after">
                                <i class="las la-tree icon-spin-hover"></i>
                            </h2>
                            <a href="#" class="grid-description">Drought</a>
                        </div>
                    </div>


                </section>
            </b-container>
        </section>
    </section>
    <!--===Section Safety End===-->
</template>

<script>

export default {
    name: 'Safety'
}
</script>
<style>
.dd-section-safety .section-title .heading {
    font-size: 2rem;
    line-height: 1.3125em;
    color: #fff;
}

.dd-section-safety .section-title .description {
    font-weight: 400;
    font-size: 1rem;
    line-height: 1.61111em;
    margin-top: 2em;
    margin-bottom: 1em;
    color: #fff;
}

.dd-section-safety {
    float: left;
    background-image: linear-gradient(45deg, #00a4bd, #00bda5);
    width: 100%;
    padding: 7rem 0;
}

/*.safety-items {*/
/*    display: flex;*/
/*    justify-content: space-around;*/
/*    padding: 10rem 2rem 4rem 2rem;*/
/*    position: relative;*/
/*}*/


.safety-items {
    display: flex;
    flex-flow: row wrap;
    margin: 80px 0 0;
}

.grid-item {
    border-right: 1px solid #fff;
    border-bottom: 1px solid #fff;
    flex: 1 1 25%;
    max-width: 25%;
    text-align: center;
    padding: 2rem;
}

.grid-item .grid-icon i {
    margin: 0 0 5px;
    font-size: 2.5em;
    color: #fff;
    display: inline-block;
    line-height: 1em;
}

.grid-item .grid-description {
    color: #fff;
    font-size: 1rem;
    font-weight: 500;
    margin: 0;
}

.grid-item .grid-description:hover {
    text-decoration: underline;
}

.grid-item:nth-child(4n) {
    border-right: 0;
}

.grid-item:nth-child(n+5) {
    border-bottom: 0;
}
</style>
