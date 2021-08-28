<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Term;
use App\Traits\ControllerTrait;

class TermController extends Controller
{
    use ControllerTrait;
    public function index()
    {
        $items = Term::paginate(10);
        return view('admin.terms.index',compact('items'));
    }
    public function create()
    {
        return view('admin.terms.create');
    }
    public function store(Request $request)
    {
       
        $data = $request->validate([
                "title"=> 'required|min:3|max:50',
        ]);

        Term::create($data);
        
      return redirect(route('terms.index'))->with('success', 'New term add successfully');
    }

    public function edit($id)
    {
        $item = Term::find($id);
        return view('admin.terms.edit',compact('item'));
    }

    public function update(Request $request, Term $term)
    {

         $data = $request->validate([
            "title"=> 'required|min:3|max:50',
            ]);

        $term->update($data);
        return redirect(route('terms.index'))->withFlashMessage('updated');
    }

}
