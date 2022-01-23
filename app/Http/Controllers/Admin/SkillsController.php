<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Skills;
use Illuminate\Http\Request;
use Carbon\Carbon;


class SkillsController extends Controller
{
    //
    public function skills()
    {
        $skills = Skills::get();
        return view('admin.skills.index',compact('skills'));
    }



    //    ============= skills store =========
   public function store(Request $request){

    $request->validate([
        'skill_name' => 'required',
        'skill_percent' => 'required',
    ]);
    
    Skills::insert([
        'skill_name' => strtoupper($request->skill_name),
        'skill_percent' => $request->skill_percent,
        'created_at' => Carbon::now(),
       ]);

       return Redirect()->back()->with('success','Skills added');
   }


   public function edit($id){
    $skills = Skills::findOrFail($id);
    return view('admin.skills.edit',compact('skills'));
}


//update
public function update(Request $request){
    $id = $request->id;
    Skills::findOrFail($id)->update([
        'skill_name' => strtoupper($request->skill_name),
        'skill_percent' => $request->skill_percent,
        'updated_at' => Carbon::now(),
    ]);

    return Redirect('admin/skills')->with('success','Skills Updated');
}


//delete
public function Delete($id){
    Skills::findOrFail($id)->delete();
    return Redirect()->back()->with('delete','Skills Deleted');
}


}
