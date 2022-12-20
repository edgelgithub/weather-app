@extends('layouts.master')

@section('title', 'GoJapan - Kyoto')

@section('content')

 <!-- slider Area Start-->
 <place-slider :background-url="'/img/service/footer_bg.jpg'" :title="'Kyoto'"></place-slider>
 <!-- slider Area End-->

 <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
         <place-details :background-url="'/img/blog/single_blog_1.png'"  :title="'Kyoto'" :long="135.7681" :lat="35.0116 ">
            <p class="excert">
                Kyoto, once the capital of Japan, is a city on the island of Honshu. 
                It's famous for its numerous classical Buddhist temples, as well as gardens, imperial palaces, Shinto shrines and traditional wooden houses. 
                It’s also known for formal traditions such as kaiseki dining, consisting of multiple courses of precise dishes, and geisha, female entertainers often found in the Gion district.
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