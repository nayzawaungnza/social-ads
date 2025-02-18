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
        
        <div class="identity-container" style="background-image:url('./assets/frontend/images/Glass_Tab.png')">
        

        <!-- Top-left image -->
        <img src="./assets/frontend/images/Circle_image.png" alt="Top left Image" class="top-left-image">

       
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
         <!-- Bottom-right image -->
        <img src="./assets/frontend/images/Diamond_image.png" alt="Bottom right Image" class="bottom-right-image">

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
                    <div class="col-xl-4 col-lg-6 col-sm-6">
                        
                        <div class="feature-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                            
                            <div class="d-flex flex-nowrap w-full justify-content-between align-items-center mb-3">
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
                    @endforeach
                    

                    
                    
                    
                </div>
            </div>
        </div>
@endif
        
  
@endsection