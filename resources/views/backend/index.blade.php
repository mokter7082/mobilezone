@extends('layouts.app_backend')
@section('content')
<div class="row">
    <div class="col-lg-9 main-chart">
        <div class="col-md-4 col-sm-4 mb">
            <div class="darkblue-panel pn">
              <div class="darkblue-header">
                <h3 class="dashboard_cat_title">Total Category</h3>
                <h1>{{ $categories??"" }}</h1>
              </div>
            </div>
            <!--  /darkblue panel -->
          </div>
        <div class="col-md-4 col-sm-4 mb">
            <div class="darkblue-panel pn">
              <div class="darkblue-header">
                <h3 class="dashboard_cat_title">Total Brands</h3>
                <h1>{{ $brands??"" }}</h1>
              </div>
            </div>
            <!--  /darkblue panel -->
          </div>
        <div class="col-md-4 col-sm-4 mb">
            <div class="darkblue-panel pn">
              <div class="darkblue-header">
                <h3 class="dashboard_cat_title">Total Mobiles</h3>
                <h1>{{ $mobiles??"" }}</h1>
              </div>
            </div>
            <!--  /darkblue panel -->
          </div>
    </div>
</div>
@endsection