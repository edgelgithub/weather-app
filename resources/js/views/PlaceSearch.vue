<template>
    <div>
      
        <input type="text" class="form form-control" v-model="query"></input>
        <button class="btn btn-primary" @click="placeSearch">Search</button>
        {{ query }}
        <!-- {{ result.features  }} -->
        <div v-for="r in result.features">
           <div class="border cursor-pointer"  role="button" @click="selectCity(r)">{{  r.properties.formatted }}</div> 
        </div>
        <hr />
        <h1>Weather Details </h1>
        <h3>{{  location }}</h3>
        {{  currentTime }} / 
        <div v-if="readableTime!=null">
            
                {{  readableTime.weather[0].main }}
        </div>
        <!-- {{ forecast  }} -->
    </div> 

</template>
<script>
export default {
    name:'place-search',
    data(){
        return {
            location:'',
            query:'osaka',
            result:[],
            forecast:[],
            // currentTime:moment().tz("Asia/Tokyo").startOf('hour').format('YYYY-MM-DD HH:00:00'),
            currentTime:moment('2022-12-19 03:00:00').tz("Asia/Tokyo").startOf('hour').format('YYYY-MM-DD HH:00:00'),
            readableTime:null,
           
        }
    },
    mounted(){
        this.placeSearch();
    },
    methods:{
        resetResult(){
            this.result=[];
        },
        getForecastedWeather(){
           
           let arrayOfDates =this.forecast.list.map(a=>moment.duration( moment( moment(a.dt_txt).format('YYYY-MM-DD HH:00:00') ).diff(moment(this.currentTime))).hours())
        //    let arrayOfDates2 =this.forecast.list.map(a=>{ return {time:a.dt_txt,diff:moment.duration( moment( moment(a.dt_txt).format('YYYY-MM-DD HH:00:00') ).diff(moment(this.currentTime))).hours() } })
          
           let min =  Math.min(...arrayOfDates.filter(x=>x>=-2));
        //    console.log(arrayOfDates2);
           this.readableTime = this.forecast.list[arrayOfDates.indexOf(min)];
        },         
         selectCity(loc){
           
            this.location=loc.properties.formatted;
            var requestOptions = {
                method: 'GET',
                };
                
                fetch("https://api.openweathermap.org/data/2.5/forecast?units=metric&lat="+loc.properties.lat+"&lon="+loc.properties.lon+"&appid=a987e303895ee2cf56510feb0537e1c4", requestOptions)
                .then(response => response.json())
                .then(result => { this.forecast=result; this.getForecastedWeather() } )
                .catch(error => console.log('error', error));
            // fetch("https://api.openweathermap.org/data/2.5/forecast?q="+loc.properties.city+","+loc.properties.country_code+"&appid=a987e303895ee2cf56510feb0537e1c4", requestOptions)
            //     .then(response => response.json())
            //     .then(result => console.log(result))
            //     .catch(error => console.log('error', error));
         },
         async placeSearch(){

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