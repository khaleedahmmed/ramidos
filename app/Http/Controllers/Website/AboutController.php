<?php

    namespace App\Http\Controllers\Website;
    
    use App\Http\Controllers\Controller;
    use App\Traits\ControllerTrait;
    use App\Models\About;
    use App\Models\Client;
    use Illuminate\Http\Request;
 
    class AboutController extends Controller
    {
        use ControllerTrait;

        public function index()
        {   
           $abouts = About::get();  
           $clients = Client::get();  
            return view('website.about', compact('abouts','clients'));
        }
    }
