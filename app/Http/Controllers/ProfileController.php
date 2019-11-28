<?php

namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
    	$users = User::all();
    	return view('frontView.profile')->with('users',$users);
    }
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
