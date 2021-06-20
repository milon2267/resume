@extends('backend.master')

@section('category_active')
    active
    show-sub
@endsection

@section('TrashList')
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
                <li><a href="#">Category</a></li>
                <li class="active">Trash List</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Trash List</h4>
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
                                    <th>Category Name</th>
                                    <th>Slug</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Category View --}}
                                @foreach ($trashed as $key => $data )
                                    <tr role="row" class="odd">
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->category_name }}</td>
                                        <td>{{ $data->slug }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td class="text-center">
                                            
                                            {{-- <a class="btn btn-danger" href="{{ route('category.destroy', $data->id) }}">Delete</a> --}}
                                            <form action="{{ route('category.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-info" href="{{ route('CategoryRestore', $data->id) }}">Restore</a>
                                                <a class="btn btn-danger" href="{{ route('CategoryDelete', $data->id) }}">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $trashed->links() }} --}}
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

