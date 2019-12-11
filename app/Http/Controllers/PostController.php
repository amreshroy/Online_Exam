<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reading;

class PostController extends Controller
{
    public function post()
    {
    	
        $data = Reading::paginate(3);

        return view('frontView.reading')->with('data',$data);
    	
    }

    public function show($id)
    {
        $data = Reading::where('id',$id)->paginate(1);
        return view('frontView.showreading')->with('data',$data);
    }
    
} 

