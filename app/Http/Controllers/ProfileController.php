<?php

namespace App\Http\Controllers; 

use App\Profile;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
    	$users = Profile::all();
    	return view('frontView.profile')->with('users',$users);
    }



    // public function edit($id)
    // {
    //     $aboutus = Abouts::findOrFail($id);
    //     return view('admin.abouts.edit')->with('aboutus',$aboutus);
    // }
    // public function update(Request $request, $id)
    // {
    //     $aboutus = Abouts::findOrFail($id);
    //     $aboutus->title = $request->input('title');
    //     $aboutus->doc = $request->input('doc');
    //     $aboutus->update();

    //     return redirect('abouts')->with('status','Data Update for Topic Table');
    // }



    // public function registeredEdit(Request $request, $id)
    // {
    // 	$users = User::findOrFail($id);
    // 	return view('admin.registered-edit')->with('users', $users);
    // }

    // public function registeredUpdate(Request $request, $id)
    // {
    //     $users = User::find($id);
    //     $users->name = $request->input('username');
    //     $users->usertype = $request->input('usertype');
    //     $users->update();

    //     return redirect('/registered')->with('success','Your Data is Updated'); 
    // }
    // public function registeredDelete($id)
    // {
    //     $users = User::findOrFail($id);
    //     $users->delete();

    //     return redirect('/registered')->with('success','You Delete One Users');
    // }
}
