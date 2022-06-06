<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        $data['categories'] = DB::table("categories")->count();
        $data['brands'] = DB::table("brands")->count();
        $data['mobiles'] = DB::table("mobiles")->count();
       return view('backend.index',$data);
    }
}
