@extends('backend.master')

@section('banner_active')
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
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <div class="text-left">
                            <h4 class="panel-title">Banner Index</h4>
                        </div>
                        <div class="text-right">
                            <a class="btn btn-info" href="{{ route('banner.create') }}">Add Banner</a>
                        </div>
                        
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
                        <table id="datatable" class="display table dataTable">
                            <thead>
                                <tr role="row">
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Sub-Title</th>
                                    <th>Main-Image</th>
                                    <th>BG-Image</th>
                                    <th>Descripttion</th>
                                    <th>Status</th>
                                    <th width="200">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Banner View --}}
                                @foreach ($banners as $key => $banner )
                                    <tr role="row" class="odd">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $banner->title }}</td>
                                        <td>{{ $banner->sub_title }}</td>
                                        <td>
                                            <img width="100" src="{{ asset('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/'.$banner->main_image) }}" alt="{{ $banner->title }}">
                                        </td>
                                        <td>
                                            <img width="100" src="{{ asset('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/'.$banner->bg_image) }}" alt="{{ $banner->title }}">
                                        </td>
                                        <td>{!! $banner->description !!}</td>
                                        <td>
                                            @if ($banner->status == 1)
                                                <a class="btn btn-success" href="{{ route('ActiveStatus', $banner->id) }}">Activated</a>
                                            @else
                                            <a class="btn btn-danger" href="{{ route('DeactiveStatus', $banner->id) }}">Deactivated</a>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            
                                            {{-- <a class="btn btn-danger" href="{{ route('category.destroy', $data->id) }}">Delete</a> --}}
                                            <form action="{{ route('banner.destroy', $banner->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-info" href="{{ route('banner.edit', $banner->id) }}">Edit</a>
                                                <a class="btn btn-danger" href="{{ route('banner.destroy', $banner->id) }}">Delete</a>
                                                {{-- <button style="cursor: pointer" class="btn btn-danger">Delete</button> --}}
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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

