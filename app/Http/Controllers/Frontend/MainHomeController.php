<?php

namespace App\Http\Controllers\Frontend;

use App\Services\ServiceService;
use Illuminate\Http\Request;
use App\Enums\PostStatusEnum;
use App\Services\SliderService;
use App\Http\Controllers\Controller;

class MainHomeController extends Controller
{

    protected $sliderService;
    protected $serviceService;
    public function __construct(SliderService $sliderService, ServiceService $serviceService)
    {
        $this->sliderService = $sliderService;
        $this->serviceService = $serviceService;
    }

    public function index(Request $request)
    {
        //dd($courses);
        $sliders = $this->sliderService->getSliders($request, PostStatusEnum::Publish);
        $services = $this->serviceService->getServices($request, PostStatusEnum::Publish);
        return view('frontend.home', compact('sliders','services'));
    }

    public function dashboard()
    {
        
        return view('frontend.dashboard');
    }

    public function services()
    {
        return view('frontend.service');
    }
    public function aboutUs()
    {
        return view('frontend.about');
    }
    public function contactUs()
    {
        return view('frontend.contact');
    }
    public function portfolio()
    {
        return view('frontend.portfolio');
    }

    public function serviceDetail($slug)
    {
        return view('frontend.service-detail');
    }
}