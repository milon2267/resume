@extends('backend.master')

@section('project_active')
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
                <li class="active text-capitalize">{{ $last ?? "" }}</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <div class="text-left">
                            <h4 class="panel-title">Project Index</h4>
                        </div>
                        <div class="text-right">
                            <a class="btn btn-info" href="{{ route('project.create') }}">Add Project</a>
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
                                    <th>Category Id</th>
                                    <th>Project File</th>
                                    <th>Live Link</th>
                                    <th>Git Link</th>
                                    <th width="250">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Project View --}}
                                @foreach ($projects as $key => $project )
                                    <tr role="row" class="odd">
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $project->category->category_name }}</td>
                                        <td>
                                            <img width="30" src="{{ asset('frontend_image/'.$project->created_at->format('Y/m/').$project->id.'/'.$project->project_file) }}" alt="{{ $project->category_id }}">
                                        </td>
                                        <td>{!! $project->live_link !!}</td>
                                        <td>{{ $project->git_link }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('project.destroy', $project->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-info" href="{{ route('project.edit', $project->id) }}">Edit</a>
                                                <button class="btn btn-danger">Delete</button>
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

