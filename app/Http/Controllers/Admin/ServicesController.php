<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DesServices;
use App\Models\Services;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ServicesController extends Controller
{
    public function services()
    {
        $services=Services::get();
        return view('admin.services.index',compact('services'));
    }
   

      //    ============= services store =========
   public function store(Request $request){

    $request->validate([
        'service_name' => 'required',
        'service_icon' => 'required',
        'services_des' => 'required',
    ]);
    
    Services::insert([
        'service_name' => strtoupper($request->service_name),
        'service_icon' => $request->service_icon,
        'services_des' =>  $request->services_des,
        'created_at' => Carbon::now(), 
       ]);

       return Redirect('admin/services')->with('success','Services added');
   }

   public function edit($id){
    $services = Services::findOrFail($id);
    return view('admin.services.edit',compact('services'));
}


//update
public function update(Request $request){
    $id = $request->id;
    Services::findOrFail($id)->update([
        'service_name' => strtoupper($request->service_name),
        'service_icon' => $request->service_icon,
        'services_des' =>  $request->services_des,
        'updated_at' => Carbon::now(),
    ]);

    return Redirect('admin/services')->with('success','Services Updated');
}


//delete
public function Delete($id){
    Services::findOrFail($id)->delete();
    return Redirect()->back()->with('delete','Services Deleted');
}



public function desServices()
{
    $services_des=DesServices::first();
    return view('admin.services.des',compact('services_des'));
}
public function desUpdate (Request $request)
{
    //error checking --it's mean when some field data missing , then see error
    $this->validate($request, [
        'top_des' => 'required',
    ]);

    //data send database
    $services_des = DesServices::first();
    $services_des->top_des = $request->top_des;
    
    $services_des->save();

    return redirect()->back()->with('status', "Services Description data has been updated successfully");
}



}
