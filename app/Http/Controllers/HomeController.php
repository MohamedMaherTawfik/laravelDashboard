<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\about;
use App\Models\clients;
use App\Models\goals;
use App\Models\services;
use App\Models\latest;
use App\Models\contact;
use App\Models\partners;

class HomeController extends Controller
{
    public function index(){

        $headers = Header::all();
        $abouts = about::all();
        $clients=clients::all();
        $goals=goals::all();
        $services=services::all();
        $latests=latest::all();
        $partners=partners::all();
        $contacts=contact::all();
        return view ('protofolio.index')->with('headers',$headers)->with('abouts',$abouts)->with('clients',$clients)
        ->with('goals',$goals)->with('services',$services)->with('latests',$latests)->with('partners',$partners)->with('contacts',$contacts);
    }

}
