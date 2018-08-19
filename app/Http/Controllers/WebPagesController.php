<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    public function indexView()
    {
        return view('webpages.home');
    }

    public function aboutView()
    {   
        $about = 'This is about';
        $create = '';
        $create = 'qwaaaa';
        return view('webpages.about')->with('about',$about)->with('create',$create);
    }

    public function loginView()
    {
        return view('webpages.login');
    }
}
