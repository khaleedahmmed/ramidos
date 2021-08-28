<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Traits\ControllerTrait;

    class SettingController extends Controller
    {
        use ControllerTrait;

        public function index()
        { 
          //  dd(auth()->user()->hasRole('super_admin'));
            $item = Setting::first();
            return view('admin.settings.edit', compact('item'));
        }
    
        public function update(Request $request)
        {         
            $data = $request->validate([
                "address"     => 'required|min:3|max:191',
                'logo'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                "map"     => 'required|min:3|max:500',
                "email"     => 'required|min:3|max:191',
                "phone"     => 'required|min:3|max:60',
                "landline"     => 'required|min:3|max:60',
                "fax"     => 'required|min:3|max:60',
                "facebook"     => 'required|min:3|max:191',
                "twitter"     => 'required|min:3|max:191',
                "instagram"     => 'required|min:3|max:191',
               ]);

              
           
            $item = Setting::first();

             if ($request->logo) {
                $this->deleteImage($item->logo,'images/settings/');
                $data['logo'] = $this->uploadImage($request->file('logo'),'images/settings');
            }

            $item->update($data);
        
            return redirect(route('settings.update'))->with('success','Settings updated successfully');
        }
    
    }

