<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    public function index()
    {
        $items = Contact::paginate(10);
        return view('admin.contacts.index',compact('items'));
    }
}
