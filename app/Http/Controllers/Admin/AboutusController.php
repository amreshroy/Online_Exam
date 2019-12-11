<?php

namespace App\Http\Controllers\Admin;
use App\Models\Abouts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
    	$aboutus = Abouts::all();
    	return view('admin.aboutus')->with('aboutus',$aboutus);
    }
    public function store(Request $request)
    {
    	$aboutus = new Abouts;

    	$aboutus->title = $request->input('title');
    	$aboutus->doc = $request->input('doc');

    	$aboutus->save();
    	return redirect('/abouts')->with('status','Data Added Successfully for About Us Table');
    }
    public function edit($id)
    {
    	$aboutus = Abouts::findOrFail($id);
    	return view('admin.abouts.edit')->with('aboutus',$aboutus);
    }
    public function update(Request $request, $id)
    {
    	$aboutus = Abouts::findOrFail($id);
    	$aboutus->title = $request->input('title');
    	$aboutus->doc = $request->input('doc');
    	$aboutus->update();

    	return redirect('abouts')->with('status','Data Update for Topic Table');
    }
    public function delete($id)
    {
    	$aboutus = Abouts::findOrFail($id);
    	$aboutus->delete();
    	return redirect('abouts')->with('status','Data Deleted for Topic Table');
    }
}
