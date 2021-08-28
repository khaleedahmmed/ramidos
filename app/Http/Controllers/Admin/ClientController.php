<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Traits\ControllerTrait;

class ClientController extends Controller
{
    use ControllerTrait;
    public function index()
    {
        $items = Client::paginate(10);
        return view('admin.clients.index',compact('items'));
    }
    public function create()
    {
        return view('admin.clients.create');
    }
    public function store(Request $request)
    {
       
        $data = $request->validate([
                "name"=> 'required|min:3|max:50',
                "img"=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->img) {
            $data['img'] = $this->uploadImage($request->file('img'),'images/clients');
        }
        Client::create($data);
        
      return redirect(route('clients.index'))->with('success', 'New client add successfully');
    }

    public function edit($id)
    {
        $item = Client::find($id);
        return view('admin.clients.edit',compact('item'));
    }

    public function update(Request $request, Client $client)
    {

         $data = $request->validate([
            "name"=> 'required|min:3|max:50',
            "img"=> 'image|mimes:jpeg,png,jpg,gif,svg',
            ]);
            if ($request->img) {
                $this->deleteImage($client->img , 'images/clients/');
                $data['img'] = $this->uploadImage($request->file('img'),'images/clients');
            }

        $client->update($data);
        return redirect(route('clients.index'))->withFlashMessage('updated');
    }

}
