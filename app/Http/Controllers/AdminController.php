<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\clients;
use App\Models\contact;
use App\Models\goals;
use App\Models\header;

use App\Models\latest;
use App\Models\partners;
use App\Models\services;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }
    public function create(){
        return view('admin.create');
    }


    public function store(Request $request)
    {
        $tableName = $request->table_name;
        if($tableName=='headers'){
            $request->validate([
                'title'=>'nullable|string|max:20',
                'subtitle'=>'nullable|string|max:50',
                'description'=>'nullable|string|max:200',
                'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            try {
            $data =new header();
            $data->title = $request->title;
            $data->subtitle = $request->subtitle;
            $data->description = $request->description;
            $filename=time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$filename,'public');
            $data->image=$path;
            $data->save();
            return redirect()->back();
            }
            catch (\Throwable $th) {
                return redirect()->back();
            }
        }
        else if($tableName=='clients'){
            $request->validate([
                'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $data =new clients();
            $filename=time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$filename,'public');
            $data->image=$path;
            $data->save();
            return redirect()->back();
        }
        else if($tableName=='abouts'){
            $request->validate([
                'title'=>'nullable|string|max:20',
                'subtitle'=>'nullable|string|max:50',
                'description'=>'nullable|string|max:200',
                'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $data =new about();
            $data->title = $request->title;
            $data->subtitle = $request->subtitle;
            $data->description = $request->description;
            $filename=time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$filename,'public');
            $data->image=$path;
            $data->save();
            return redirect()->back();
        }
        else if($tableName=='goals'){
            $request->validate([
                'title'=>'nullable|string|max:20',
                'subtitle'=>'nullable|string|max:200',
            ]);
            $data =new goals();
            $data->title = $request->title;
            $data->subtitle = $request->subtitle;
            $data->save();
            return redirect()->back();
        }
        else if($tableName=='services'){
            $request->validate([
                'title'=>'nullable|string|max:20',
                'description'=>'nullable|string|max:200',
            ]);
            $data =new services();
            $data->title = $request->title;
            $data->description = $request->description;
            $data->save();
            return redirect()->back();
        }
        else if($tableName=='latests'){
            $request->validate([
                'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $data =new latest();
            $filename=time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$filename,'public');
            $data->image=$path;
            $data->save();
            return redirect()->back();
        }
        else if($tableName=='partners'){
            $request->validate([
                'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $data =new partners();
            $filename=time().$request->file('image')->getClientOriginalName();
            $path=$request->file('image')->storeAs('images',$filename,'public');
            $data->image=$path;
            $data->save();
            return redirect()->back();
        }
        else if($tableName=='contacts'){
            $request->validate([
                'address'=>'nullable|string|max:50',
                'phone'=>'nullable|string|max:50',
                'email'=>'nullable|string|email|max:50',
            ]);
            $data =new contact();
            $data->address = $request->address;
            $data->phone = $request->phone;
            $data->email = $request->email;
            $data->save();
            return redirect()->back();
        }

    }


}
