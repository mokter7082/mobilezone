@extends('layouts.app_backend')
@section('content')
<div class="row">
 <div class="col-lg-12 main-chart">
      <h3><i class="fa fa-angle-right"></i> Add Category</h3>
      <form class="form-inline"  action="{{route('store-mobile')}}" method="POST"  enctype="multipart/form-data">
          @csrf
             <div class="form-group">
                <label class="" for="">Title</label><br/>
                <input type="text" name="title" class="form-control"  placeholder="Enter Title" required>
             </div>

              <div class="form-group">
                 <label class="" for="">Category</label><br/>
                 <select class="form-control" name="category_id"  style="width: 172px;" required>
                    <option>----select----</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach 
                  </select>
              </div>
              <div class="form-group">
                 <label class="" for="">Brand</label><br/>
                 <select class="form-control"  name="brand_id" style="width: 172px;" required>
                    <option>--select--</option>
                    @foreach ($brands as $brand)
                     <option value="{{ $brand->id }}">{{ $brand->name }}</option> 
                    @endforeach
                 </select>
              </div>
              <div class="form-group">
                  <label class="" for="">Picture</label><br/>
                  <input type="file" class="form-control" name="picture" style="width:172px" required>
             </div>
             <div class="form-group">
               <label class="" for="">First Relese</label><br/>
               <input type="date" name="first_release" class="form-control" required>
            </div>
             <div class="form-group">
               <label class="" for="">Official Price</label><br/>
               <input type="number"  class="form-control" name="official_price" placeholder="officeal price" required>
            </div>
             <div class="form-group">
               <label class="" for="">Unofficial Price</label><br/>
               <input type="number"  class="form-control" name="unofficeal_price" placeholder="Unofficeal price" required>
            </div>
             <div class="form-group">
               <label class="" for="">Color</label><br/>
               <input type="text" class="form-control" name="color" placeholder="color" required>
            </div>
             <div class="form-group">
               <label class="" for="">Network</label><br/>
               <input type="text" class="form-control" name="network" placeholder="network" required>
            </div>
             <div class="form-group">
               <label class="" for="">Sim</label><br/>
               <input type="text" class="form-control" name="sim" placeholder="sim" required>
            </div>
             <div class="form-group">
               <label class="" for="">wlan</label><br/>
               <input type="text" class="form-control" name="wlan" placeholder="wlan" required>
            </div>
             <div class="form-group">
               <label class="" for="">bluetooth</label><br/>
               <input type="text" class="form-control" name="bluetooth" placeholder="bluetooth" required>
            </div>
             <div class="form-group">
               <label class="" for="">gps</label><br/>
               <input type="text" class="form-control" name="gps" placeholder="gps" required>
            </div>
             <div class="form-group">
               <label class="" for="">radio</label><br/>
               <input type="text" class="form-control" name="radio" placeholder="radio" required>
            </div>
             <div class="form-group">
               <label class="" for="">usb</label><br/>
               <input type="text" class="form-control" name="usb" placeholder="usb" required>
            </div>
             <div class="form-group">
               <label class="" for="">otg</label><br/>
               <input type="text" class="form-control" name="otg" placeholder="otg" required>
            </div>
             <div class="form-group">
               <label class="" for="">style</label><br/>
               <input type="text" class="form-control" name="style" placeholder="style" required>
            </div>
             <div class="form-group">
               <label class="" for="">material</label><br/>
               <input type="text" class="form-control" name="material" placeholder="material" required>
            </div>
             <div class="form-group">
               <label class="" for="">dimensions</label><br/>
               <input type="text" class="form-control" name="dimensions" placeholder="dimensions" required>
            </div>
             <div class="form-group">
               <label class="" for="">weight</label><br/>
               <input type="text" class="form-control" name="weight" placeholder="weight" required>
            </div>
             <div class="form-group">
               <label class="" for="">size</label><br/>
               <input type="text" class="form-control" name="size" placeholder="size" required>
            </div>
             <div class="form-group">
               <label class="" for="">resolution</label><br/>
               <input type="text" class="form-control" name="resolution" placeholder="resolution" required>
            </div>
             <div class="form-group">
               <label class="" for="">technology</label><br/>
               <input type="text" class="form-control" name="technology" placeholder="technology" required>
            </div>
             <div class="form-group">
               <label class="" for="">protection</label><br/>
               <input type="text" class="form-control" name="protection" placeholder="protection"  required>
            </div>
             <div class="form-group">
               <label class="" for="">features</label><br/>
               <input type="text" class="form-control" name="features" placeholder="features"  required>
            </div>
             <div class="form-group">
               <label class="" for="">video_recording</label><br/>
               <input type="text" class="form-control" name="video_recording" placeholder="video_recording" required>
            </div>
             <div class="form-group">
               <label class="" for="">fornt_camera</label><br/>
               <input type="text" class="form-control" name="fornt_camera" placeholder="fornt_camera"  required>
            </div>
             <div class="form-group">
               <label class="" for="">back_camera</label><br/>
               <input type="text" class="form-control" name="back_camera" placeholder="back_camera"  required>
            </div>
             <div class="form-group">
               <label class="" for="">battery_type_capacity</label><br/>
               <input type="text" class="form-control" name="battery_type_capacity" placeholder="battery_type_capacity"  required>
            </div>
             <div class="form-group">
               <label class="" for="">os</label><br/>
               <input type="text" class="form-control" name="os" placeholder="os"  required>
            </div>
             <div class="form-group">
               <label class="" for="">chipset</label><br/>
               <input type="text" class="form-control" name="chipset" placeholder="chipset"  required>
            </div>
             <div class="form-group">
               <label class="" for="">rom</label><br/>
               <input type="text" class="form-control" name="rom" placeholder="rom"  required>
            </div>
             <div class="form-group">
               <label class="" for="">ram</label><br/>
               <input type="text" class="form-control" name="ram" placeholder="ram"  required>
            </div>
             <div class="form-group">
               <label class="" for="">processor</label><br/>
               <input type="text" class="form-control" name="processor" placeholder="processor"  required>
            </div>
             <div class="form-group">
               <label class="" for="">microsd_slot</label><br/>
               <input type="text" class="form-control" name="microsd_slot" placeholder="microsd_slot"  required>
            </div>
             <div class="form-group">
               <label class="" for="">fingerprint</label><br/>
               <input type="text" class="form-control" name="fingerprint" placeholder="fingerprint"  required>
            </div>
             <div class="form-group">
               <label class="" for="">face_unlock</label><br/>
               <input type="text" class="form-control" name="face_unlock" placeholder="face_unlock"  required>
            </div>
             <div class="form-group">
               <label class="" for="">manufactured_by</label><br/>
               <input type="text" class="form-control" name="manufactured_by" placeholder="manufactured_by"  required>
            </div>
              <div class="">
                <button type="submit" class="btn btn-primary add_mobile_btn">Add Mobile</button>
              </div>
     </form>
 </div>
</div>
@endsection

@push('scripts')
<script>
  
 
</script>
@endpush