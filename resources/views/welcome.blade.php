@extends('layouts.master')
@section('upper-content')
<div id="down" class="col-md-12">
    <div class="right-top-nav">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-12">
                    <div class="col-12 col-md-12">
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <!-- Single Featured Post -->
                                <h1 class="text-center">
                                    WELCOME
                                </h1>
                                <div style="font: 2rem">
                                    <h3 style="line-height: 2">
                                        <!-- Welcome to Trumpet Sound Academy -->
                                        Trumpet Sound Academy (TSA) is the first
                                        school in Minna–Nigeria that harmonized
                                        and uses the Accelerated, 
                                        Alpha and Acts Christian Education 
                                        (ACE) curricula and inculcates 
                                        the Nigerian curriculum to bridge 
                                        all gap topics and subjects. This makes 
                                        the school unique, as its approach is not 
                                        conventional, especially as it deploys 
                                        the individualized learning system.
                                    </h3><br>
                                    <h3 style="line-height: 2">
                                        It places emphasis on learning
                                        rather than teaching and a great
                                        deal is done to recognize and 
                                        motivate individual pupils.
                                        Very close co-operation with 
                                        parents is encouraged and expected, 
                                        hence, much responsibility for the 
                                        training and education of 
                                        children is placed on the School as 
                                        well as with the parents.</p><br>
                                    </h3><br>
                                    <div style="width: 200px; padding: 20px; background-color: #2b4167; border-radius: 50px; margin: 0 auto">
                                        <a href="{{ route('about') }}"><h4 class="text-center" style="color:white !important; font-size:0.8rem">… Read more About Us …</h4></a>
                                    </div > <br><br>

                                    <div class="col-12 justisfy-center">
                                        <div class="col-12 col-md-6">
                                            <img style="margin: 0 auto" src="{{asset('frontend/images/image013.png')}}" alt="" srcset="">
                                        </div> <br>
                                        <div class="col-12 col-md-6">
                                            <a href="{{ route('vacancy_form') }}" class="info-request2">
                                                <!-- <i class="icomoon icon-download"></i> -->
                                                <span class="holder"><br>
                                                    <span class="text-center" style="font-size: 1.5rem; line-height: 1.2">Online Vacancy Application!</span>
                                                </span>
                                                <!-- <span class="arrow"></span> -->
                                            </a>
                                        </div>
                                        
                                    </div>
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
</div>
@endsection

@section('lower-content')
<section class="posts">
    <div class="container">
        
        <article class="color-tests">
            <div class="pic color-test rgb-to-hex-shorthand"><img width="121" src="{{asset('frontend/images/2.png')}}" alt=""></div>
            
            
            <div class="info">
                <h3 class="blink">VISION</h3>
                <p>To be the number one Christian School
                    That seeks to make
                    Consecrated Hearts,
                    Educated Minds,
                    Equipped Hands
                    For God’s Glory
                 </p>
            </div>
        </article>
        <article class="color-tests">
            <div class="pic"><img width="121" src="{{asset('frontend/images/3.png')}}" alt=""></div>
            <div class="info">
                <h3>MISSION</h3>
                <p>Moulding lives into Christ Likeness by Developing Character and Academic Excellence </p>
            </div>
        </article>
        
    </div>
    <!-- / container -->
</section><br>

<section class="post">
    <div class="container">
        <div class="col-md-12">
            <h1 class="text-center">
                Current Affairs
            </h1>
            <div class="slider-cont2">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($current_affairs as $current_affair)
                            <div class="swiper-slide">{{ $current_affair->description }}</div>
                        @endforeach
                      
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection