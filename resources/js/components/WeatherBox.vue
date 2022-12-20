<template>
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 my-5" >
                 
        <div class="single-services text-center mb-30 bg-light p-3 " v-if="weatherData">
            <div class="services-cap">
                     <h6> Temp  {{ weatherData.main.temp }} ℃ </h6>
                   
            </div>
             <div class="services-ion">
                         <img :src="`http://openweathermap.org/img/wn/${weatherData.weather[0].icon}@2x.png`">
            </div> 
            <div class="services-cap">
                         <h4 class="text-gray border-bottom"> {{ weatherData.weather[0].main }}</h4>
                         <h6> <i class="fa fa-tint"></i>Humidity {{weatherData.main.humidity}}%</h6>
                         <h6> Wind speed  {{weatherData.wind.speed}}km/h </h6>
                                       
             </div>
        </div>
        <template  v-else-if="!weatherData && !hasError">
            <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
             </div> Checking weather...
        </template>
        
        <template  v-else>
            <div class="alert alert-danger" role="alert">
                Error Feching weather...
            </div>
        </template>
    </div>
</template>

<script>
    export default{
        name:'weather-box',
        props:['lat','long'],
        data(){
            return{
               hasError:false,
               forecast:[],
               currentTime:moment().tz("Asia/Tokyo").startOf('hour').format('YYYY-MM-DD HH:00:00'),
               weatherData:null
            }
        },
        mounted(){
            this.getWeather();
        },
        methods:{
            handleError(error){
                this.hasError=true; 
                console.log(this.hasError, error)
                console.log('error', error)
            },
          
            getWeather(){
                this.hasError=false;
                var requestOptions = {
                method: 'GET',
                };
                fetch(`https://api.openweathermap.org/data/2.5/weather?units=metric&lat=${this.lat}&lon=${this.long}&appid=a987e303895ee2cf56510feb0537e1c4`, requestOptions)
                .then(response => response.json())
                .then(result => {  
                    if(result.cod==200)
                    {
                        this.weatherData=result; 
                    
                    }
                    else{
                        this.handleError('!200') 
                    }
                    
                })
                .catch(error => { this.handleError(error) });
            }
        }
    
    }
    </script>