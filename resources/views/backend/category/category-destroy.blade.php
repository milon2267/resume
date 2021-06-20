@extends('backend.master')

@section('category_active')
    active
    show-sub
@endsection

@section('index')
    active
    show-sub
@endsection

@section('content')
<div class="page-inner" style="min-height:790.2000122070312px !important">
    <div class="page-title">
        <h3 class="breadcrumb-header">Data Tables</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb breadcrumb-with-header">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Tables</a></li>
                <li class="active">Datatables</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Category Delete</h4>
                    </div>
                    <div class="panel-body">
                        {{-- Error Message --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- Table Start --}}
                        <form action="{{ route('category.destroy', $data->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <table id="datatable" class="display table dataTable">
                                <thead>
                                    <tr role="row">
                                        <th>SL</th>
                                        <th>Category Name</th>
                                        <th>Slug</th>
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- Category View --}}
                                    @foreach ($trashes as $key => $data )
                                        <tr role="row" class="odd">
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->category_name }}</td>
                                            <td>{{ $data->slug }}</td>
                                            <td>{{ $data->created_at }}</td>
                                            <td class="text-center">
                                                <a class="btn btn-info" href="{{ route('category.destroy', $data->id) }}">Edit</a>
                                                {{-- <a class="btn btn-danger" href="{{ route('category.destroy', $data->id) }}">Delete</a> --}}
                                                
                                                    <a class="btn btn-danger" href="#">Delete</a>
                                                    <button style="cursor: pointer" class="btn btn-outline-danger">Delete</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                {{-- Category Add --}}
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h4 class="panel-title">Category Add</h4>
                    </div>
                    <div class="panel-body ">
                        {{-- Category Store/Post --}}
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Category Name:</label>
                                <input id="category" class="form-control m-t-xxs" type="name" name="category_name" placeholder="Category Name">
                            </div>
                            <div class="form-group">
                                <label for="">Category Slug:</label>
                                <input id="slug" class="form-control m-t-xxs" type="text" name="slug" placeholder="Category Slug">
                            </div>
                            
                            <button class="btn btn-info">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Main Wrapper -->
    <div class="page-footer">
        <p class="no-s">Made with <i class="fa fa-heart"></i> by stacks</p>
    </div>
</div>
@endsection

@section('footer_js')
    <script>
        // data table
        $(document).ready(function() {
            $('#datatable').DataTable();
            //Buttons examples
            var table = $('#datatable-buttons').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'colvis']
            });

            table.buttons().container().appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
            
        } );
        // Add Permalink Slug.
        $('#category').keyup(function() {
            $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g,"-"));
        });
    </script>
@endsection

