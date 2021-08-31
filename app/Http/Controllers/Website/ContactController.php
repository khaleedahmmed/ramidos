<?php

    namespace App\Http\Controllers\Website;
    
    use App\Http\Controllers\Controller;
    use App\Traits\ControllerTrait;
    use App\Models\Subscribe;
    use App\Models\Contact;
    use Illuminate\Http\Request;
 
    class ContactController extends Controller
    {
        use ControllerTrait;

        public function index()
        {   
            return view('website.contact');
       }

        public function contactRequest(Request $request)
        {   
            $data = $request->validate([
                "name"     => 'required|min:3|max:191',
                "phone"     => 'required|min:3|max:191',
                "email"     => 'required|min:3|max:191',
                "message"     => 'required|min:3',
               ]);

               Contact::create($data);


               return redirect(route('contact'))->with('success', 'You message sent successfully');
            }

        public function subscribe(Request $request)
        {   
            $data = $request->validate([
                "email"     => 'required|min:3|max:191|unique:subscribes,email',
               ]);
               Subscribe::create($data);
         return redirect(route('home'))->with('success', 'You subscribed successfully');
       }

    }
