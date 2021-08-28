<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Traits\ControllerTrait;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use ControllerTrait;
    public function index()
    {
        $items = About::paginate(10);
        return view('admin.abouts.index',compact('items'));
    }
    public function create()
    {
        return view('admin.abouts.create');
    }
    public function store(Request $request)
    {
       
        $data = $request->validate([
                "small_title"=> 'required|min:3|max:50',
                "title"=> 'required|min:3|max:50',
                "body"=> 'required',
                "img"=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->img) {
            $data['img'] = $this->uploadImage($request->file('img'),'images/about');
        }
        About::create($data);
        
      return redirect(route('abouts.index'))->with('success', 'New About add successfully');
    }

    public function edit($id)
    {
        $item = About::find($id);
        return view('admin.abouts.edit',compact('item'));
    }

    public function update(Request $request, About $about)
    {

         $data = $request->validate([
            "small_title"=> 'required|min:3|max:50',
            "title"=> 'required|min:3|max:50',
            "body"=> 'required',
            "img"=> 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            if ($request->img) {
                $this->deleteImage($about->img , 'images/about/');
                $data['img'] = $this->uploadImage($request->file('img'),'images/about');
            }

        $about->update($data);
        return redirect(route('abouts.index'))->withFlashMessage('updated');
    }



}
