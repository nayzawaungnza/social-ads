<?php

namespace App\Http\Controllers\Frontend;

use App\Services\ClientService;
use App\Services\PostService;
use App\Services\ServiceService;
use Illuminate\Http\Request;
use App\Enums\PostStatusEnum;
use App\Services\SliderService;
use App\Http\Controllers\Controller;

class MainHomeController extends Controller
{

    protected $sliderService;
    protected $serviceService;
    protected $clientService;
    protected $postService;
    public function __construct(SliderService $sliderService, ServiceService $serviceService, ClientService $clientService, PostService $postService)
    {
        $this->sliderService = $sliderService;
        $this->serviceService = $serviceService;
        $this->clientService = $clientService;
        $this->postService = $postService;
    }

    public function index(Request $request)
    {
        //dd($courses);
        $sliders = $this->sliderService->getSliders($request, PostStatusEnum::Publish);
        $services = $this->serviceService->getServices($request, PostStatusEnum::Publish);
        $clients = $this->clientService->getClients();
        $posts = $this->postService->getPosts();
        return view('frontend.home', compact('sliders','services','clients','posts'));
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