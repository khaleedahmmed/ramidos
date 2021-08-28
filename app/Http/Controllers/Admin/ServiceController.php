<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Traits\ControllerTrait;

class ServiceController extends Controller
{
    use ControllerTrait;
    public function index()
    {
        $items = Service::paginate(10);
        return view('admin.services.index',compact('items'));
    }
    public function create()
    {
        return view('admin.services.create');
    }
    public function store(Request $request)
    {
       
        $data = $request->validate([
            "title"=> 'required|min:3|max:191',
            "body"=> 'required|min:3',
            "img"=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->img) {
            $data['img'] = $this->uploadImage($request->file('img'),'images/service');
        }
        Service::create($data);
        
      return redirect(route('services.index'))->with('success', 'New service add successfully');
    }

    public function edit($id)
    {
        $item = Service::find($id);
        return view('admin.services.edit',compact('item'));
    }

    public function update(Request $request, service $service)
    {

         $data = $request->validate([
            "title"=> 'required|min:3|max:191',
            "body"=> 'required|min:3',
            "img"=> 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            if ($request->img) {
                $this->deleteImage($service->img , 'images/services/');
                $data['img'] = $this->uploadImage($request->file('img'),'images/service');
            }

        $service->update($data);
        return redirect(route('services.index'))->withFlashMessage('updated');
    }
}
