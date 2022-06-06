@extends('layouts.app_backend')
@section('content')
<div class="row">
    <div class="col-lg-9 main-chart">
      <h3><i class="fa fa-angle-right"></i> Add Brand</h3>
            @if(Session::has('message'))
              <p class="alert alert-success">{{ Session::get('message') }}</p>
              @endif
            <form class="contact-form"  action="{{route('save-brand')}}" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Brand Name" data-rule="minlen:4" data-msg="This field is required" >
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="short_description" placeholder="Short Description" rows="2" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="description" placeholder="Description" rows="4" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="">
                <button type="submit" class="btn btn-primary">Add Brand</button>
              </div>
            </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
  
 
</script>
@endpush