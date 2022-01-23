<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function about()
    {
        $about = About::first();
        return view('admin.about',compact('about'));
    }


    public function update(Request $request)
    {
        //error checking --it's mean when some field data missing , then see error
        $this->validate($request, [
            'top_description' => 'required',
            'bottom_description' => 'required',
            'title' => 'required',
            'birth' => 'required',
            'age' => 'required',
            'web' => 'required',
            'degree' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'city' => 'required',
            'work' => 'required',
        
        ]);

        //data send database
        $about = About::first();
        $about->top_description = $request->top_description;
        $about->bottom_description = $request->bottom_description;
        $about->title = $request->title;
        $about->birth = $request->birth;
        $about->age = $request->age;
        $about->web = $request->web;
        $about->degree = $request->degree;
        $about->phone = $request->phone;
        $about->email = $request->email;
        $about->city = $request->city;
        $about->work = $request->work;
       
        //one image added or replace one iamge
        if($request->file('image')){
            $img_file = $request->file('image');
            //bc_img
            $img_file->storeAs('public/img/','image.' . $img_file->getClientOriginalExtension());
            //replace image by new image
            $about->image = 'storage/img/image.' . $img_file->getClientOriginalExtension();
        }


        $about->save();

        return redirect('admin/about')->with('status', "About Page data has been updated successfully");
    }
}
