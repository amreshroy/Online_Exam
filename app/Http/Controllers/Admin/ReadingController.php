<?php

namespace App\Http\Controllers\Admin;
use App\Reading;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReadingController extends Controller
{
    public function readingControls()
    {
        $users = Reading::all();
        return view('admin.reading-controls')->with('users',$users);
    }
    public function readingStore(Request $request)
    {
        $users = new Reading;
        $users->title = $request->input('title');
        $users->documment = $request->input('documment');

        $users->save();
        return redirect('/reading-controls')->with('sucess','Data Added for Reading Topic');
    }
    public function readingEdit(Request $request, $id)
    {
        $users = Reading::findOrFail($id);
        return view('admin.reading-edit')->with('users', $users);
    }

    public function readingUpdate(Request $request, $id)
    {
        $users = Reading::find($id);
        $users->title = $request->input('username');
        $users->documment = $request->input('text');
        $users->update();

        return redirect('/reading-controls')->with('success','Your Data is Updated'); 
    }
    public function readingDelete($id)
    {
        $users = Reading::findOrFail($id);
        $users->delete();

        return redirect('/reading-controls')->with('success','You Delete One Users');
    }
}
 

