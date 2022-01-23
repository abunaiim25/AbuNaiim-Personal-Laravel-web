<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function resume()
    {
        $resume = Resume::first();
        return view('admin.resume',compact('resume'));
    }
   

    public function update(Request $request)
    {
        //error checking --it's mean when some field data missing , then see error
        $this->validate($request, [
            'head_des' => 'required',
            'study_sub' => 'required',
            'study_date' => 'required',
            'study_place' => 'required',
            'study_des' => 'required',
            'work_sub' => 'required',
            'work_date' => 'required',
            'work_des' => 'required',
        ]);

        //data send database
        $resume = Resume::first();
        $resume->head_des = $request->head_des;
        $resume->study_sub = $request->study_sub;
        $resume->study_date = $request->study_date;
        $resume->study_place = $request->study_place;
        $resume->study_des = $request->study_des;
        $resume->work_sub = $request->work_sub;
        $resume->work_date = $request->work_date;
        $resume->work_des = $request->work_des;


        $resume->save();

        return redirect('admin/resume')->with('status', "Resume Page data has been updated successfully");
    }

}
