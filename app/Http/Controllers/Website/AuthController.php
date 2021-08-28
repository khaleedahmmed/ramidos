<?php

    namespace App\Http\Controllers\Website;
    
    use App\Http\Controllers\Controller;
    use App\Traits\ControllerTrait;
    use Illuminate\Http\Request;
 
    class AuthController extends Controller
    {
        use ControllerTrait;

        public function login()
        {   
            return view('website.login');
        }
    }
