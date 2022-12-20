@extends('layouts.master')
@section('title', 'GoJapan - Tokyo')
@section('content')
 <!-- slider Area Start-->
 <div class="slider-area ">
    <!-- Mobile Menu -->

    <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2>Tokyo</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>
 <!-- slider Area End-->
 {{  app()->view->getSections()['background']  }}test
 @yield('content')
 <section class="blog_area single-post-area section-padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 posts-list">
             <div class="single-post">
                <div class="feature-img">
                   <img class="img-fluid" src="/img/blog/single_blog_1.png" alt="">
                </div>
                <div class="blog_details">
                   <h2>Tokyo
                 
                   </h2>
                   <ul class="blog-info-link mt-3 mb-4">
                      <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                      <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                   </ul>
                   <p class="excert">
                    Tokyo, Japan’s busy capital, mixes the ultramodern and the traditional, from neon-lit skyscrapers to historic temples. 
                    The opulent Meiji Shinto Shrine is known for its towering gate and surrounding woods. 
                    The Imperial Palace sits amid large public gardens. 
                    The city's many museums offer exhibits ranging from classical art (in the Tokyo National Museum) to a reconstructed kabuki theater (in the Edo-Tokyo Museum).
                   </p>
                
                </div>
             </div>
           
          </div>
          <div class="col-lg-4">
             <div class="blog_right_sidebar">
              
               @include('layouts.place-sidebar')
     
             </div>
          </div>
       </div>
    </div>
 </section>
   
@endsection