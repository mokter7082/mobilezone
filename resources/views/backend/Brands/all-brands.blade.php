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
                    <th>Short Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_brands as $key => $brand)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $brand->name }}</td>
                    <td>{{ $brand->short_description }}</td>
                    <td>{{ $brand->status }}</td>
                    <td>
                        <button class="btn btn-danger btn-sm">delete</button>
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