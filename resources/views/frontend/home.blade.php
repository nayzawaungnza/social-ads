@extends('layouts/frontend/master', ['activePage' => 'home', 'page' => 'Home'])

@section('content')
    @if(!empty($sliders))
        <div class="swiper mySwiper">
        <!-- Swiper Wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <img src="{{Storage::disk('public')->url($slider->default_image->image_url)}}" alt="image">
                </div>

                
            @endforeach
           
        </div>
        <!-- Custom Navigation Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    @endif
    
<div class="digital-identify-section">
  <div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center social-labs-title mb-5">Identify Your Digital Fingerprint</h3>
        </div>
        <div class="col-md-6">
        
        <div class="identity-container">
            <!-- Overlay image -->
            <img src="./assets/frontend/images/Glass_Tab_All.png" alt="Back Image" class="overlay-image">

            <!-- Content -->
            <div class="content">
                <p>Every business has its unique digital fingerprint.</p>
                <p>Let's discover yours and unlock your true potential in the digital landscape.</p>
                <ul class="business-types">
                    <li>a) New Business</li>
                    <li>b) Growing Business</li>
                    <li>c) Transforming Business</li>
                </ul>
            </div>

        </div>

        </div>
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <div class="fingerprint">
                <img src="./assets/frontend/images/fingerprint.png" alt="Finger Print" class="fingerprint-image">
            </div>
        </div>
    </div>
  </div>
</div>


   
@if(!empty($services))
    <div class="features-section-social-ads pt-50 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="social-labs-title text-align-left">Services</h3>
                    </div>
                    @foreach($services as $service)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 ">
                        <div class="position-relative p-0">
                        
                        <div class="feature-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            <img src="./assets/frontend/images/Glass_Tab_Service_1.png" alt="Back Image" class="service-overlay-image">
                            <div class="d-flex flex-nowrap w-full justify-content-between align-items-center mb-1">
                                <div>
                                    <a target="_blank" href="{{route('website.service-detail', $service->slug)}}"><h4>{{$service->name}}</h4></a>
                                </div>
                                <div class="icon">
                                  <img src="{{Storage::disk('public')->url($service->default_image->image_url)}}" alt="{{$service->name}}" class="img-fluid icon-image">
                                </div>
                            </div>
                            
                            {!! $service->description !!}

                        </div>
                        </div>
                    </div>
                    @endforeach
                    

                    
                    
                    
                </div>
            </div>
        </div>
@endif
@if(!empty($posts))
<div class="recent-post-section pt-50 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-nowrap w-full justify-content-between align-items-center mb-5">
                    <h3 class="social-labs-title text-align-left">Our Recent Journey</h3>
                    <div class="">
                        <a href="#" class="social-ads-blog-btn"><span>See all projects</span> <i class="bx bx-right-arrow-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        @foreach($posts as $post)
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{route('website.post-detail', $post->slug)}}">
                            <img
                                src="{{Storage::disk('public')->url($post->default_image->image_url)}}"
                                alt="{{$post->name}}"
                            />
                        </a>
                        <div class="blog-metainfo">
                            <h3>
                                <a href="{{route('website.post-detail', $post->slug)}}">{{$post->name}}</a>
                            </h3>
                            <div class="d-flex flex-nowrap w-full justify-content-between align-items-center">
                                @if($post->postCategories->count() > 0)
                                    <ul>
                                        @foreach($post->postCategories as $category)
                                            <li><a href="{{route('website.category-detail', $category->slug)}}">{{$category->name}}</a></li>
                                        @endforeach
                                        
                                    </ul>
                                @endif
                                
                                <div>
                                    <a href="{{route('website.post-detail', $post->slug)}}" class="btn-link">
                                        <img src="./assets/frontend/images/Arrow.svg" alt="Image" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
            
        </div>
    </div>
</div>

@endif
@if(!empty($clients))
<div class="clients-social-ads pt-50 pb-70">
    
            <div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <h3 class="text-center social-labs-title mb-5">Our Clients</h3>
        </div>
        @foreach($clients as $index => $client)
            <div class="col-md-2 mb-3 d-flex justify-content-center">
                <div class="client-image text-center">
                    @if(isset($client->default_image->image_url))
                        <img src="{{ Storage::disk('public')->url($client->default_image->image_url) }}" 
                             alt="{{ $client->name }}" class="img-fluid">
                    @else
                        <img src="{{ asset('default-client.png') }}" alt="Default Image" class="img-fluid">
                    @endif
                </div>
            </div>

            @if(($index + 1) % 5 == 0)
                </div><div class="row justify-content-center"> <!-- Start new row after every 5 items -->
            @endif
        @endforeach
    </div>
</div>

       
</div>
@endif
  
<div class="social-ads-banner pt-50 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex flex-nowrap w-full justify-content-between align-items-center mb-1">
                    <div class="position-relative p-0">
                        <h3 class="social-labs-title position-relative text-align-left z-3">Partner with Social Ads to Make Your Brand Digital Fingerprint Stand Out</h3>
                        <img class="star_1 z-1" src="./assets/frontend/images/Star_1.png" alt="Image">
                    </div>
                    <div class="">
                        <img class="diamond_1" src="./assets/frontend/images/Diamond_1.png" alt="Image">
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="d-flex flex-nowrap w-full justify-content-between align-items-center mb-1">
                    <h5 class="social-labs-speak text-align-left position-relative z-4">Let us Touch and Transform Your Digital Success Story</h5>
                    <div class="">
                        <a href="#" class="social-ads-blog-btn z-3"><span>See all projects</span> <i class="bx bx-right-arrow-alt" ></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection