<?php

    namespace App\Http\Controllers\Website;
    
    use App\Http\Controllers\Controller;
    use App\Traits\ControllerTrait;
    use App\Models\Service;
    use App\Models\Client;
    use Illuminate\Http\Request;
 
    class ServiceController extends Controller
    {
        use ControllerTrait;

        public function index()
        {   
           $services = Service::get();  
           $clients = Client::get();  
            return view('website.services', compact('services','clients'));
        }

        public function serviceDetails($id)
        {         
           $service = Service::find($id);  
           $services = Service::get();  
          return view('website.serviceDetails', compact('services','service'));
        }
    }
