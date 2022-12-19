@extends('layouts.master')
@section('title', 'Welcome to Japan')
@section('content')

    <search-area></search-area>
<!-- slider Area End-->

 <!-- Our Services End -->
<!-- Favourite Places Start -->
<div class="favourite-place place-padding">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <span>FEATURED TOURS Packages</span>
                    <h2>Favourite Places</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-place mb-30">
                    <div class="place-img">
                        <img src="{{ asset('img/service/services1.jpg') }}" alt="">
                    </div>
                    <div class="place-cap">
                        <div class="place-cap-top">
                     
                            <h3><a href="#">Tokyo</a></h3>
                            <p class="dolor">$1870 <span>/ Per Person</span></p>
                        </div>
                        <div class="place-cap-bottom">
                            <ul>
                                <li><i class="far fa-clock"></i>3 Days</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-place mb-30">
                    <div class="place-img">
                        <img src="{{ asset('img/service/services2.jpg') }}" alt="">
                    </div>
                    <div class="place-cap">
                        <div class="place-cap-top">
                            <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                            <h3><a href="#">The Dark Forest Adventure</a></h3>
                            <p class="dolor">$1870 <span>/ Per Person</span></p>
                        </div>
                        <div class="place-cap-bottom">
                            <ul>
                                <li><i class="far fa-clock"></i>3 Days</li>
                                <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-place mb-30">
                    <div class="place-img">
                        <img src="{{ asset('img/service/services3.jpg') }}" alt="">
                    </div>
                    <div class="place-cap">
                        <div class="place-cap-top">
                            <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                            <h3><a href="#">The Dark Forest Adventure</a></h3>
                            <p class="dolor">$1870 <span>/ Per Person</span></p>
                        </div>
                        <div class="place-cap-bottom">
                            <ul>
                                <li><i class="far fa-clock"></i>3 Days</li>
                                <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-place mb-30">
                    <div class="place-img">
                        <img src="{{ asset('img/service/services4.jpg') }}" alt="">
                    </div>
                    <div class="place-cap">
                        <div class="place-cap-top">
                            <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                            <h3><a href="#">The Dark Forest Adventure</a></h3>
                            <p class="dolor">$1870 <span>/ Per Person</span></p>
                        </div>
                        <div class="place-cap-bottom">
                            <ul>
                                <li><i class="far fa-clock"></i>3 Days</li>
                                <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-place mb-30">
                    <div class="place-img">
                        <img src="{{ asset('img/service/services5.jpg') }}" alt="">
                    </div>
                    <div class="place-cap">
                        <div class="place-cap-top">
                            <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                            <h3><a href="#">The Dark Forest Adventure</a></h3>
                            <p class="dolor">$1870 <span>/ Per Person</span></p>
                        </div>
                        <div class="place-cap-bottom">
                            <ul>
                                <li><i class="far fa-clock"></i>3 Days</li>
                                <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-place mb-30">
                    <div class="place-img">
                        <img src="{{ asset('img/service/services6.jpg') }}" alt="">
                    </div>
                    <div class="place-cap">
                        <div class="place-cap-top">
                            <span><i class="fas fa-star"></i><span>8.0 Superb</span> </span>
                            <h3><a href="#">The Dark Forest Adventure</a></h3>
                            <p class="dolor">$1870 <span>/ Per Person</span></p>
                        </div>
                        <div class="place-cap-bottom">
                            <ul>
                                <li><i class="far fa-clock"></i>3 Days</li>
                                <li><i class="fas fa-map-marker-alt"></i>Los Angeles</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Favourite Places End -->
@endsection