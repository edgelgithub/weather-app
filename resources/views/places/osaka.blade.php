@extends('layouts.master')

@section('title', 'GoJapan - Osaka')

@section('content')

 <!-- slider Area Start-->
 <place-slider :background-url="'/img/service/footer_bg.jpg'" :title="'Tokyo'"></place-slider>
 <!-- slider Area End-->

 <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
         <place-details :background-url="'/img/blog/single_blog_1.png'"  :title="'Osaka'" :long="135.5023" :lat="34.6937">
            <p class="excert">
                Osaka is a large port city and commercial center on the Japanese island of Honshu. 
                It's known for its modern architecture, nightlife and hearty street food. 
                The 16th-century shogunate Osaka Castle, which has undergone several restorations, is its main historical landmark. 
                It's surrounded by a moat and park with plum, peach and cherry-blossom trees. Sumiyoshi-taisha is among Japan’s oldest Shinto shrines. 
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