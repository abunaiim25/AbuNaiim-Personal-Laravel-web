<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function social()
    {
        $social=Social::get();
        return view('admin.social.index',compact('social'));
    }


     //    ============= services store =========
   public function store(Request $request){

    $request->validate([
        'icon' => 'required',
        'link' => 'required',
        
    ]);
    
    Social::insert([
        'icon' => $request->icon,
        'link' => $request->link,
        'created_at' => Carbon::now(), 
       ]);

       return Redirect('admin/social')->with('success','Social Media added');
   }

   public function edit($id){
    $social = Social::findOrFail($id);
    return view('admin.social.edit',compact('social'));
}


//update
public function update(Request $request){
    $id = $request->id;
    Social::findOrFail($id)->update([
        'icon' => $request->icon,
        'link' => $request->link,
        'updated_at' => Carbon::now(),
    ]);

    return Redirect('admin/social')->with('success','Social Media Updated');
}


//delete
public function Delete($id){
    Social::findOrFail($id)->delete();
    return Redirect()->back()->with('delete','Services Deleted');
}


}
