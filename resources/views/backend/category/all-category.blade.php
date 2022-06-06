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
                    <th>Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_categories as $key => $category)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $category->name }}</td>
                    <td> <img class="cat_img" src="{{url('public/images/categories/'.$category->image??"" )}}" alt=""> </td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->status }}</td>
                    <td>
                        @if ($category->status == "Active")
                        <button class="btn btn-primary btn-sm">Active</button> 
                        @else
                        <button class="btn btn-primary btn-sm">Inactive</button> 
                        @endif
                        
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