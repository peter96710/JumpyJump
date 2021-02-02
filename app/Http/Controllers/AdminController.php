<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function listing(){
        $contacts = Contact::get();
        return view('admin/listing', array('contacts' => $contacts));
    }



    public function updates(){
        return view('admin/updates');
    }

    public function posting(Request $request){

        $this->validate($request, [

            'name' =>['required', 'string', 'max:191'],
            'description' =>['required', 'string', 'max:900'],
        ]);
        $request->request->add(['author'=>Auth::user()->name]);
        Post::create($request->all());
        return redirect('/home');
    }

    public function destroy(Contact $contacts)
    {
        Contact::find($contacts->id)->delete();
        return redirect('/admin/listing');
    }
}
