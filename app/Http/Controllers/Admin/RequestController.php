<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Request as Model;


class RequestController extends Controller
{
    public function index()
    {  
        $items = Model::paginate(10);
        return view('admin.requests.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 
}
