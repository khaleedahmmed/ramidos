<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;
use App\Traits\ControllerTrait;

    class SectionController extends Controller
    {
        use ControllerTrait;

        public function sectionOne()
        { 
            $item = Section::first();
            return view('admin.homeSections.editSectionOne', compact('item'));
        }
    
        public function updateSectionOne(Request $request)
        {         
            $data = $request->validate([
                "small_title"     => 'required|min:3|max:191',
                "title"     => 'required|min:3|max:191',
                "body"     => 'required|min:3',              
               ]);
               
            $item = Section::first();
            $item->update($data);
            return redirect(route('sectionOne.update'))->with('success','Section updated successfully');
        }

        public function sectionTwo()
        { 
            $item = Section::get()[1];
            return view('admin.homeSections.editSectionTwo', compact('item'));
        }
    
        public function updateSectionTwo(Request $request)
        {         
            $data = $request->validate([
                "small_title"     => 'required|min:3|max:191',
                "title"     => 'required|min:3|max:191',
                "body"     => 'required|min:3',
              
               ]);
               
            $item = Section::get()[1];
            $item->update($data);
            return redirect(route('sectionTwo.update'))->with('success','Section updated successfully');
        }
        
        public function sectionThree()
        { 
            $item = Section::get()[2];
            return view('admin.homeSections.editSectionThree', compact('item'));
        }
    
        public function updateSectionThree(Request $request)
        {         
            $data = $request->validate([
                "small_title"     => 'required|min:3|max:191',
                "title"     => 'required|min:3|max:191',
                "body"     => 'required|min:3',
                'img'        => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
              
               ]);
               
            $item = Section::get()[2];
            if ($request->img) {
                $this->deleteImage($item->img,'images/sections/');
                $data['img'] = $this->uploadImage($request->file('img'),'images/sections');
            }
            $item->update($data);
            return redirect(route('sectionThree.update'))->with('success','Section updated successfully');
        }

    }

