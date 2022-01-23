<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeAdmin;
use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
    //
    public function home()
    {
        //for take from data
        //return $main = Main::first();
        $home = HomeAdmin::first();
        return view('admin.home',compact('home'));
           
    }


    public function update(Request $request)
    {
        //error checking --it's mean when some field data missing , then see error
        $this->validate($request, [
            'name' => 'required',
        
        ]);

        //data send database
        $home = HomeAdmin::first();
        $home->name = $request->name;
      
       
        //one image added or replace one iamge
        if($request->file('profile_img')){
            $img_file = $request->file('profile_img');
            //bc_img
            $img_file->storeAs('public/img/','profile_img.' . $img_file->getClientOriginalExtension());
            //replace image by new image
            $home->profile_img = 'storage/img/profile_img.' . $img_file->getClientOriginalExtension();
        }


        if($request->file('bg_img')){
            $img_file = $request->file('bg_img');
            //bc_img
            $img_file->storeAs('public/img/','bg_img.' . $img_file->getClientOriginalExtension());
            //replace image by new image
            $home->bg_img = 'storage/img/bg_img.' . $img_file->getClientOriginalExtension();
        }

        

        $home->save();

        return redirect('admin/home')->with('status', "Home Page data has been updated successfully");
    }

}
