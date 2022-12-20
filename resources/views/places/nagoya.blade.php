@extends('layouts.master')

@section('title', 'GoJapan - Nagoya')

@section('content')

 <!-- slider Area Start-->
 <place-slider :background-url="'/img/service/footer_bg.jpg'" :title="'Nagoya'"></place-slider>
 <!-- slider Area End-->

 <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
         <place-details :background-url="'/img/places/nagoya.jpg'"  :title="'Nagoya'" :long="136.9066" :lat="35.1815">
            <p class="excert">
                Nagoya, capital of Japan’s Aichi Prefecture, is a manufacturing and shipping hub in central Honshu. 
                The city’s Naka ward is home to museums and pachinko (gambling machine) parlors. 
                Naka also includes the Sakae entertainment district, with attractions like the Sky-Boat Ferris wheel, which is attached to a mall. 
                In northern Naka is Nagoya Castle, a partly reconstructed 1612 royal home displaying Edo-era artifacts.
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