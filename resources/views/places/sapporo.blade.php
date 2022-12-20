@extends('layouts.master')

@section('title', 'GoJapan - Sapporo')

@section('content')

 <!-- slider Area Start-->
 <place-slider :background-url="'/img/service/footer_bg.jpg'" :title="'Sapporo'"></place-slider>
 <!-- slider Area End-->

 <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
         <place-details :background-url="'/img/places/sapporo.jpg'"  :title="'Sapporo'"  :long="141.3545" :lat="43.0618">
            <p class="excert">
                Sapporo, capital of the mountainous northern Japanese island of Hokkaido, is famous for its beer, skiing and annual Sapporo Snow Festival featuring enormous ice sculptures. 
                The Sapporo Beer Museum traces the city’s brewing history and has tastings and a beer garden. 
                Ski hills and jumps from the 1972 Winter Olympics are scattered within the city limits, and Niseko, a renowned ski resort, is nearby.
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