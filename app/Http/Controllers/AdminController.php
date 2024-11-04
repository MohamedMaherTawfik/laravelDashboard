<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    public function create(){
        return view('admin.create');
    }


    public function store(Request $request){
        return $request->all();
    }
}
