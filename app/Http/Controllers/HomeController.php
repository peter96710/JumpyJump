<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$role = Role::create(['name' => 'admin']);
        $user = Auth::user();
        $user->assignRole('admin');
        $posts = Post::get();
        return view('home',array('posts' => $posts));
    }

    public function faq()
    {
        return view('faq');
    }

    public function contact(Request $request){

        $this->validate($request, [

            'name' =>['required', 'string', 'max:191'],
            'email' =>['required', 'string','email', 'max:90'],
        ]);
        Contact::create($request->all());
        return redirect('/home');
    }

    public function posting(Post $posts)
    {

        $poszts = Post::where('id', $posts->id)->get();

        return view('post', array('poszts' => $poszts));
    }
}
