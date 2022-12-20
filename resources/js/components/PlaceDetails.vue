<template>
     <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" :src="backgroundUrl" alt="">
                </div>
                <div class="blog_details">
                   <h2>{{ title }}</h2>
                   <WeatherBox :lat="lat" :long="long"/>
                   
                   <slot></slot>
                
                </div>
             </div>
           
          </div>
    </template>
<script>
    import WeatherBox from "./WeatherBox.vue";
    export default{
            name:'place-details',
            props:['title','backgroundUrl','lat','long'],
            components:{
                WeatherBox
            },
            data(){
                return{
                        image:{ backgroundImage:`url(${this.backgroundUrl})` }
                    }
            }

    }
</script>