<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reading;

class PostController extends Controller
{
    function post()
    {
    	$data = Reading::all();
    	return view('frontView.reading',['data'=>$data]);
    	// return Reading::all();
    }
}

