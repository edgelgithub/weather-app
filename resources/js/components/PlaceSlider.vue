<template>
<div class="slider-area ">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" :style="image">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>{{title}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
</template>
<script>
export default{
    name:'place-slider',
    props:['backgroundUrl','title'],
    data(){
        return{
            image:{ backgroundImage:`url(${this.backgroundUrl})` }
        }
    }

}
</script>