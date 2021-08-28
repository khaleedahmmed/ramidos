<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Traits\ControllerTrait;

class CountryController extends Controller
{
    use ControllerTrait;
    public function index()
    {
        $items = Country::paginate(10);
        return view('admin.countries.index',compact('items'));
    }
    public function create()
    {
        return view('admin.countries.create');
    }
    public function store(Request $request)
    {
       
        $data = $request->validate([
                "title"=> 'required|min:3|max:50',
        ]);

        Country::create($data);
        
      return redirect(route('countries.index'))->with('success', 'New country add successfully');
    }

    public function edit($id)
    {
        $item = Country::find($id);
        return view('admin.countries.edit',compact('item'));
    }

    public function update(Request $request, Country $country)
    {

         $data = $request->validate([
            "title"=> 'required|min:3|max:50',
            ]);

        $country->update($data);
        return redirect(route('countries.index'))->withFlashMessage('updated');
    }

}
