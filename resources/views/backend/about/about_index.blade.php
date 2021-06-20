@extends('backend.master')

@section('about_active')
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
                            <h4 class="panel-title">About Me Index</h4>
                        </div>
                        <div class="text-right">
                            <a class="btn btn-info" href="{{ route('about.create') }}">Add About</a>
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
                                    <th>Image</th>
                                    <th>Descripttion</th>
                                    <th>Download Link</th>
                                    <th width="250">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- About View --}}
                                @foreach ($abouts as $key => $about )
                                    <tr role="row" class="odd">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $about->title }}</td>
                                        <td>
                                            <img width="100" src="{{ asset('frontend_image/'.$about->created_at->format('Y/m/').$about->id.'/'.$about->image) }}" alt="{{ $about->title }}">
                                        </td>
                                        <td>{!! $about->description !!}</td>
                                        <td>{{ $about->download_link }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('about.destroy', $about->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-info" href="{{ route('about.edit', $about->id) }}">Edit</a>
                                                <a class="btn btn-danger" href="{{ route('about.destroy', $about->id) }}">Delete</a>
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

