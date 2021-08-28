<?php

    namespace App\Http\Controllers\Website;
    
    use App\Http\Controllers\Controller;
    use App\Traits\ControllerTrait;
    use App\Models\Slider;
    use App\Models\Section;
    use App\Models\Client;
    use App\Models\Service;
    use Illuminate\Http\Request;
 
    class HomeController extends Controller
    {
        use ControllerTrait;

        public function index()
        {   
           $sliders = Slider::get(); 
           $sections = Section::get(); 
           $clients = Client::get(); 
           $services = Service::take(3)->get(); 
            return view('website.index', compact('sliders','sections','clients','services'));
        }
    }
