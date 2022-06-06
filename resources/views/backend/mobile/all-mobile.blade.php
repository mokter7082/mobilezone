@extends('layouts.app_backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
      <section class="wrapper">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Brand Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_mobile as $key => $mobile)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $mobile->title }}</td>
                    <td> <img class="cat_img" src="{{url('public/images/mobiles/'.$mobile->picture??"" )}}" alt=""> </td>
                    <td>{{ $mobile->category_id }}</td>
                    <td>{{ $mobile->status }}</td>
                    <td>
                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>
                        <a href="{{ route('show-mobile',$mobile->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>

        </table>
      </section> 
    </div>
</div>
@endsection
@push('scripts')
    <script>
       $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endpush