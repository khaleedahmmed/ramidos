<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Traits\ControllerTrait;

class SliderController extends Controller
{
    use ControllerTrait;
    public function index()
    {
        $items = Slider::paginate(10);
        return view('admin.sliders.index',compact('items'));
    }
    public function create()
    {
        return view('admin.sliders.create');
    }
    public function store(Request $request)
    {
       
        $data = $request->validate([
            "title"=> 'min:3|max:191',
            "body"=> 'min:3',
            "img"=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->img) {
            $data['img'] = $this->uploadImage($request->file('img'),'images/bg');
        }
        Slider::create($data);
        
      return redirect(route('sliders.index'))->with('success', 'New slider add successfully');
    }

    public function edit($id)
    {
        $item = Slider::find($id);
        return view('admin.sliders.edit',compact('item'));
    }

    public function update(Request $request, Slider $slider)
    {
         $data = $request->validate([
            "title"=> 'min:3|max:191',
            "body"=> 'min:3',
            "img"=> 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            
            if ($request->img) {
                $this->deleteImage($slider->img , 'images/bg/');
                $data['img'] = $this->uploadImage($request->file('img'),'images/bg');
            }

        $slider->update($data);
        return redirect(route('sliders.index'))->withFlashMessage('updated');
    }
}
