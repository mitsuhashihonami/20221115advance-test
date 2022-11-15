<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function index()
    {
       

        return view('contact.index');
    }

    public function create(ContactRequest $request)
    {
       $inputs = $request->all();

        return view(
            'contact.store',
            compact('inputs')
    );
        
    }

    public function store(Request $request)
    {
        $inputs = new Contact;
        $inputs->fullname = $request->input('fullname');
        $inputs->email = $request->input('email');
        $inputs->postcode = $request->input('postcode');
        $inputs->address = $request->input('address');
        $inputs->building_name = $request->input('building_name');
        $inputs->opinion = $request->input('opinion');
        $inputs->save();

        return view(
            'contact.thanks',
            compact('inputs')
        );

    }

   
    
}
