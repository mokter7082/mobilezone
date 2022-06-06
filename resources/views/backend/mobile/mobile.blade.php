@extends('layouts.app_backend')
@section('content')
<div class="row">
    
    <div class="col-lg-12">
    <section class="wrapper">
        <a href="{{ route('all-mobile') }}">Back</a>
    <div class="row">
        <div class="col-md-3">
            <div class="left-column">
            <img class="" src="{{url('public/images/mobiles/'.$mobile->picture??"" )}}" alt="">
            </div>
        </div>
        <div class="col-md-9">
        <div class="right-column">
            <div class="product-description">
                <h1 style="margin-top:0px;">{{ $mobile->title }}</h1>
                <div class="row">
                    <div class="col-md-4">
                        <ul class="mobile_info">
                            <li> <strong>Category name:</strong> {{ $mobile->categories_name??""}}</li>
                            <li> <strong>Brand name:</strong> {{ $mobile->brand_name??""}}</li>
                            <li> <strong>Official Price:</strong> {{ $mobile->official_price??""}} TK</li>
                            <li> <strong>Unofficial Price:</strong> {{ $mobile->unofficeal_price??""}} TK</li>
                            <li> <strong>Available Color:</strong> {{ $mobile->color??""}}</li>
                            <li> <strong>Network:</strong> {{ $mobile->network??""}}</li>
                            <li> <strong>Sim:</strong> {{ $mobile->sim??""}}</li>
                            <li> <strong>Wlan:</strong> {{ $mobile->wlan??""}}</li>
                            <li> <strong>Bluetooth:</strong> {{ $mobile->bluetooth??""}}</li>
                            <li> <strong>GPS:</strong> {{ $mobile->gps??""}}</li>
                            <li> <strong>USB:</strong> {{ $mobile->usb??""}}</li>
                            <li> <strong>OTG:</strong> {{ $mobile->otg??""}}</li>
                            <li> <strong>Style:</strong> {{ $mobile->style??""}}</li>
                            <li> <strong>Material:</strong> {{ $mobile->material??""}}</li>
                            <li> <strong>Dimensions:</strong> {{ $mobile->dimensions??""}}</li>
                            <li> <strong>Size:</strong> {{ $mobile->size??""}}</li>
                            <li> <strong>Resolution:</strong> {{ $mobile->resolution??""}}</li>
                        </ul>
                    </div>
                    <div class="col-md-8">
                        <ul class="mobile_info">
                            <li> <strong>Technology:</strong> {{ $mobile->technology??""}}</li>
                            <li> <strong>Protection:</strong> {{ $mobile->protection??""}}</li>
                            <li> <strong>Features:</strong> {{ $mobile->features??""}}</li>
                            <li> <strong>Video Recording:</strong> {{ $mobile->video_recording??""}}</li>
                            <li> <strong>Fornt Camera:</strong> {{ $mobile->fornt_camera??""}}</li>
                            <li> <strong>Back Camera:</strong> {{ $mobile->back_camera??""}}</li>
                            <li> <strong>Battery Type Capacity:</strong> {{ $mobile->battery_type_capacity??""}}</li>
                            <li> <strong>Os:</strong> {{ $mobile->os??""}}</li>
                            <li> <strong>Chipset:</strong> {{ $mobile->chipset??""}}</li>
                            <li> <strong>Rom:</strong> {{ $mobile->rom??""}}</li>
                            <li> <strong>Ram:</strong> {{ $mobile->ram??""}}</li>
                            <li> <strong>Processor:</strong> {{ $mobile->processor??""}}</li>
                            <li> <strong>Microsd Slot:</strong> {{ $mobile->microsd_slot??""}}</li>
                            <li> <strong>Fingerprint:</strong> {{ $mobile->fingerprint??""}}</li>
                            <li> <strong>Face Unlock:</strong> {{ $mobile->os??""}}</li>
                            <li> <strong>Manufactured By:</strong> {{ $mobile->manufactured_by??""}}</li>
                        </ul>
                    </div>
                </div>   
            </div>
        </div>
        </div>




    </section> 
    </div>
</div>
@endsection
@push('scripts')
    <script>
    
    </script>
@endpush