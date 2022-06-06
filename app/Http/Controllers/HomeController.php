<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Mobile; 
use DB;

class HomeController extends Controller
{
    public function index()
    {
       $data['brands'] = Brand::where('status','Active')->get();
       $data['mobiles'] = Mobile::where('status','Active')->get();
    //    dd($data['mobiles']);
       
        return view('pages.index',$data);
    }
}
