<template>
     <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" :src="backgroundUrl" alt="">
                </div>
                <div class="blog_details">
                   <h2>{{ title }}</h2>
                   
                   <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                 
                        <div class="single-services text-center mb-30 bg-primary p-3 ">
                            <div class="services-cap">
                                <h5> Temp  11.53 ℃ </h5></div>
                            <div class="services-ion">
                                <img src="http://openweathermap.org/img/wn/04d@2x.png">
                            </div> 
                            <div class="services-cap">
                                <h5 class="text-white">        Broken clouds</h5>
                                <h5> <i class="fa fa-tint"></i>Humidity 37%</h5>
                                <h5> Wind speed  2.99km/h </h5>
                                              
                            </div>
                        </div>
                    </div>
                   <slot></slot>
                
                </div>
             </div>
           
          </div>
    </template>
<script>
export default{
    name:'place-details',
    props:['title','backgroundUrl'],
    data(){
         return{
                image:{ backgroundImage:`url(${this.backgroundUrl})` }
            }
      }

}
</script>