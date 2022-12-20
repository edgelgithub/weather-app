@extends('layouts.master')

@section('title', 'GoJapan - Tokyo')

@section('content')

 <!-- slider Area Start-->
 <place-slider :background-url="'/img/service/footer_bg.jpg'" :title="'Tokyo'"></place-slider>
 <!-- slider Area End-->

 <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
         <place-details :background-url="'/img/places/tokyo.jpg'"  :title="'Tokyo'"  :long="139.6503" :lat="35.6762">
            <p class="excert">
                Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples. 
                The opulent Meiji Shinto Shrine is known for its towering gate and surrounding woods. 
                The Imperial Palace sits amid large public gardens. 
                The city's many museums offer exhibits ranging from classical art (in the Tokyo National Museum) to a reconstructed kabuki theater (in the Edo-Tokyo Museum).
            </p>
         </place-details>

          <div class="col-lg-4">
             <div class="blog_right_sidebar">
              
               @include('layouts.place-sidebar')
     
             </div>
          </div>
       </div>
    </div>
 </section>
   
@endsection