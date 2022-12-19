<template>
<div class="slider-area ">
  
    <!-- Mobile Menu -->
    <div class="slider-active">
        <div class="single-slider hero-overly  slider-height d-flex align-items-center" style="background-image:url('img/hero/h1_hero.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 col-lg-9 col-md-9">
                        <div class="hero__caption">
                            <h1>Welcome to <span>Japan!</span> </h1>
                            <p>Where would you like to go?</p>
                        </div>
                    </div>
                </div>
                <search-box :_weather-data.sync="weatherData" :_place-title.sync="placeTitle"></search-box>
                
                <div class="our-services pt-5"  v-if="weatherData!=null && weatherData.weather!==undefined">
                    <div class="container">
                        <div class="row d-flex justify-content-center">
                            
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 ">
                                <div class="single-services text-center mb-30 bg-white">
                                    <div class="services-cap">
                                        <h3>{{  placeTitle  }}</h3>
                                        <h5> Temp  {{  weatherData.main.temp }} &#8451; </h5>
                                             </div>
                                    <div class="services-ion">
                                        <img :src="'http://openweathermap.org/img/wn/'+weatherData.weather[0].icon+'@2x.png'"></img>
                               
                                    </div>
                                    <div class="services-cap">
                                        <h5>        {{  weatherData.weather[0].description | capitalized }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</template>
<script>
import SearchBox from '../components/SearchBox.vue';
export default {
    name:'search-area',
    components:{
        'search-box': SearchBox
    },
    data(){
        return{
            weatherData:{},
            placeTitle:""
        }
    },
    filters:{
        capitalized(name) {
            const capitalizedFirst = name[0].toUpperCase();
            const rest = name.slice(1);

            return capitalizedFirst + rest;
            }
    }

   
}


</script>