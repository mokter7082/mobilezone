@extends('layouts.app')
@section('content')
<div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder"> 
  <!-- ========================================== SECTION – HERO ========================================= -->


  <!-- ========================================= SECTION – HERO : END ========================================= --> 
  
  <!-- ============================================== filter page ============================================== -->
   <div class="col-md-12">
       <div class="filter-container">
         <div class="">
               <h4>filter:</h4>
         </div>
         <div class="">
           <input type="text" placeholder="Start price">
         </div>
         <div class="">
           <h4>to</h4>
         </div>
         <div class="">
          <input type="text" placeholder="End price">
        </div>
         <div class="">
          <button class="btn btn-warning">Go</button>
        </div>
       </div>
   </div>
  <!-- /.info-boxes --> 
  <!-- ============================================== INFO BOXES : END ============================================== --> 
  <!-- ============================================== SCROLL TABS ============================================== -->
  <div id="" class="scroll-tabs outer-top-vs wow fadeInUp">
    <div class="col-md-12" style="margin-bottom:10px">
      <div class="productHeadLine">
        <h2>Available Mobiles</h2>
      </div>
    </div>
    <div class="mainContainer">
       <div class="col-md-12">
          <div class="home_mobile_continer">
            {{-- {{dd($mobiles)}} --}}
            @foreach ($mobiles as $mobile)
            {{-- {{dd($mobile)}} --}}
            <div class="card_container">
              <a href="">
               <div class="card_content">
                 <div class="card_img">
                   <img src="{{url('public/images/mobiles/'.$mobile->picture??"" )}}" alt="">
                 </div>
                 <div class="card_body">
                    <h3 class="mobile_title"> {{ $mobile->title }} </h3>
                    <h4 class="mobile_price">Price: {{ $mobile->official_price}} TK</h4>
                 </div>
               </div>
              </a>
            </div>
            @endforeach
          </div>
       </div>
    </div>
    <!-- /.tab-content --> 
  </div>
  <!-- /.scroll-tabs --> 
  <!-- ============================================== SCROLL TABS : END ============================================== --> 
  <!-- ============================================== WIDE PRODUCTS ============================================== -->
</div>
@endsection
