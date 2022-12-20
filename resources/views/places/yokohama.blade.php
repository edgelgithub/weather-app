@extends('layouts.master')

@section('title', 'GoJapan - Yokohama')

@section('content')

 <!-- slider Area Start-->
 <place-slider :background-url="'/img/service/footer_bg.jpg'" :title="'Yokohama'"></place-slider>
 <!-- slider Area End-->

 <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
         <place-details :background-url="'/img/blog/single_blog_1.png'"  :title="'Yokohama'" :long="139.638" :lat="35.4437">
            <p class="excert">
                Yokohama (Japanese: 横浜, pronounced [yokohama] (listen)) is the second-largest city in Japan by population[1] and the most populous municipality of Japan. 
                It is the capital city and the most populous city in Kanagawa Prefecture, with a 2020 population of 3.8 million. 
                It lies on Tokyo Bay, south of Tokyo, in the Kantō region of the main island of Honshu. 
                Yokohama is also the major economic, cultural, and commercial hub of the Greater Tokyo Area along the Keihin Industrial Zone and two Californian sister city partnerships of San Diego (1957–2021) and San Francisco (since 2021) are located in the West Coast of the United States
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