<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\DesServices;
use App\Models\HomeAdmin;
use App\Models\Resume;
use App\Models\Services;
use App\Models\Skills;
use App\Models\Social;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function front_layout()
    {
        $home=HomeAdmin::first();
        $about=About::first();
        $skills = Skills::get();
        $des_services = DesServices::first();
        $services = Services::get();
        $contact_des=Contact::first();
        $social=Social::get();
        $resume = Resume::first();
        return view("layouts.front_layout",compact('home','about','skills','des_services','services','contact_des','social','resume'));
    }
}
