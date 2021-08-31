<?php

    namespace App\Http\Controllers\Website;
    
    use App\Http\Controllers\Controller;
    use App\Traits\ControllerTrait;
    use App\Models\Term;
    use App\Models\Country;
    use App\Models\Shipment;
    use App\Models\Request as Model;
    use Illuminate\Http\Request;
 
    class RequestController extends Controller
    {
        use ControllerTrait;

        public function index()
        {   
            $terms     = Term::get();
            $countries = Country::get();
            $shipments = Shipment::get();
            return view('website.request', compact('terms', 'countries', 'shipments'));
       }

        public function sendRequest (Request $request)
        {   
            $data = $request->validate([
                "first_name" => "required|min:3|max:191",
                "last_name"   => "required|min:3|max:191",
                "phone"       => "required|min:3|max:191",
                "email"       => "required|min:3|max:191",
                "company"     => "required|min:3|max:191",
                "wieght"      => "required|max:191",
                "volume"      => "required|max:191",
                "commodity"   => "required|max:191",
                "term"        => "required|max:191",
                "shipment"    => "required",
                "origin"      => "required",
                "destination" => "required",
                "note"        => "required|max:191"

               ]);

               Model::create($data);


               return redirect(route('get.request'))->with('success', 'You request sent successfully');
            }


    }
