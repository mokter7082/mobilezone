<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mobile; 
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class MobileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $all_mobile = Mobile::all();
        return view('backend.mobile.all-mobile',compact('all_mobile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = DB::table('categories')->get();
        $data['brands'] = DB::table('brands')->get();
        return view('backend.mobile.add-mobile',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $title = DB::table('mobiles')->where('title',$request->title)->first();
        if($title){
            dd("all ready exist");
        }



        $image = $request->file('picture');
        if($image){
            $image_name = Str::random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_fullname = $image_name.'.'.$ext;
            $upload_path ='public/images/mobiles';
            $image_url = $upload_path.$image_fullname;
            $success = $image->move($upload_path,$image_fullname);
            //dd($data);
        }



        $mobile = new Mobile;
        $mobile->title = $request->title;
        $mobile->category_id = $request->category_id;
        $mobile->brand_id = $request->brand_id;
        $mobile->picture = $image_fullname;
        $mobile->slug = $request->slug;
        $mobile->first_release = $request->first_release;
        $mobile->official_price = $request->official_price;
        $mobile->unofficeal_price = $request->unofficeal_price;
        $mobile->color = $request->color;
        $mobile->network = $request->network;
        $mobile->sim = $request->sim;
        $mobile->wlan = $request->wlan;
        $mobile->bluetooth = $request->bluetooth;
        $mobile->gps = $request->gps;
        $mobile->radio = $request->radio;
        $mobile->usb = $request->usb;
        $mobile->otg = $request->otg;
        $mobile->style = $request->style;
        $mobile->material = $request->material;
        $mobile->dimensions = $request->dimensions;
        $mobile->weight = $request->weight;
        $mobile->size = $request->size;
        $mobile->resolution = $request->resolution;
        $mobile->technology = $request->technology;
        $mobile->protection = $request->protection;
        $mobile->features = $request->features;
        $mobile->video_recording = $request->video_recording;
        $mobile->fornt_camera = $request->fornt_camera;
        $mobile->back_camera = $request->back_camera;
        $mobile->battery_type_capacity = $request->battery_type_capacity;
        $mobile->os = $request->os;
        $mobile->chipset = $request->chipset;
        $mobile->rom = $request->rom;
        $mobile->processor = $request->processor;
        $mobile->microsd_slot = $request->microsd_slot;
        $mobile->fingerprint = $request->fingerprint;
        $mobile->face_unlock = $request->face_unlock;
        $mobile->manufactured_by = $request->manufactured_by;
        $mobile->mad_in = $request->mad_in;
        $mobile->save();
        return back()->with('success', 'New Mobile added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $mobile = DB::table('mobiles')
               ->join('brands', 'brands.id','=','mobiles.brand_id')
               ->join('categories', 'categories.id','=','mobiles.category_id')
               ->select('mobiles.*','brands.name as brand_name','categories.name as categories_name')
               ->where('mobiles.id',$id)
               ->first();
    //    dd($mobile);
       return view('backend.mobile.mobile',compact('mobile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
