<template>
    <!-- Search Box -->
    <div class="row">
            <div class="col-xl-12">
                <!-- form -->
                <form action="#" class="search-box" autocomplete="off" >
                 
                    <div class="input-form mb-30  col-xl-6">
                      
                        <input type="text" v-model="query" placeholder="When Would you like to go ?">
                        <div class="col-xl-12 bg-primary p-2 overflow-auto position-absolute mx-0" 
                            style="left:0" 
                            v-if="!hideResult && result.features!=undefined && result.features.length>0">

                           <p class="text-white border-bottom border-light" role="button" 
                                  v-for="r in result.features"
                                  @click="selectCity(r)" >
                                <b class="text-white">{{r.properties.city}}</b>,  <small>{{r.properties.formatted}}</small>,
                            </p>
                          
                        </div>
                    </div>
                    
                    <div class="search-form mb-30 col-xl-6">
                        <a href="#" @click.prevent="placeSearch" @keypup.enter="placeSearch">Search</a>
                    </div>	
                    
                </form>	
            </div>
          
    </div>
</template>
<script>
export default{
    name:'search-box',
    props:['_weatherData','_placeTitle'],
    data(){
        return {
            hideResult:false,
            location:'',
            query:'osaka',
            result:[],
            forecast:[],
            // currentTime:moment().tz("Asia/Tokyo").startOf('hour').format('YYYY-MM-DD HH:00:00'),
            currentTime:moment('2022-12-19 03:00:00').tz("Asia/Tokyo").startOf('hour').format('YYYY-MM-DD HH:00:00'),
            weatherData:null,
           
        }
    },
    mounted(){
     
        this.placeSearch();
    },
    methods:{
        getForecastedWeather(){
            this.hideResult=true;
           let arrayOfDates =this.forecast.list.map(a=>moment.duration( moment( moment(a.dt_txt).format('YYYY-MM-DD HH:00:00') ).diff(moment(this.currentTime))).hours())
        //    let arrayOfDates2 =this.forecast.list.map(a=>{ return {time:a.dt_txt,diff:moment.duration( moment( moment(a.dt_txt).format('YYYY-MM-DD HH:00:00') ).diff(moment(this.currentTime))).hours() } })
          
           let min =  Math.min(...arrayOfDates.filter(x=>x>=-2));
        //    console.log(arrayOfDates2);
           this.weatherData = this.forecast.list[arrayOfDates.indexOf(min)];
           this.$emit('update:_weatherData',this.weatherData)
           console.log(this.weatherData);
        },         
         selectCity(loc){
            this.$emit('update:_placeTitle', loc.properties.city+ ', '+ loc.properties.country); 
            this.location=loc.properties.formatted;
            var requestOptions = {
                method: 'GET',
                };
                
                fetch("https://api.openweathermap.org/data/2.5/forecast?units=metric&lat="+loc.properties.lat+"&lon="+loc.properties.lon+"&appid=a987e303895ee2cf56510feb0537e1c4", requestOptions)
                .then(response => response.json())
                .then(result => { this.forecast=result; this.getForecastedWeather() } )
                .catch(error => console.log('error', error));

         },
         async placeSearch(){

            this.hideResult=false;
            this.$emit('update:_weatherData',{}); 

            if(this.query.trim()=='')
            return;
            var requestOptions = {
                method: 'GET',
                };

                fetch("https://api.geoapify.com/v1/geocode/autocomplete?filter=countrycode:jp&text="+this.query+"&apiKey=ca76c36c4819436983278efd4dbbe13a", requestOptions)
                .then(response => response.json())
                .then(result => this.result=result)
                .catch(error => console.log('error', error));
        }
    },
    watch:{ 
        query:function(newVal,oldVal){
            console.log(newVal)
          
                this.result = [];

            
        }
    }

}
</script>