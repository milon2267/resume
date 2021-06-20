@extends('backend.master')

@section('social_active')
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
                <li class="active">Social</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <div class="text-left">
                            <h4 class="panel-title">Social Me Index</h4>
                        </div>
                        <div class="text-right">
                            <a class="btn btn-info" href="{{ route('social.create') }}">Add Social</a>
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
                                    <th>Facebook</th>
                                    <th>Twitter</th>
                                    <th>Linkdin</th>
                                    <th>Github</th>
                                    <th>Behance</th>
                                    <th class="text-center" width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- About View --}}
                                @foreach ($socials as $key => $social )
                                    <tr role="row" class="odd">
                                        <td>{{ $social->facebook }}</td>
                                        <td>{{ $social->twitter }}</td>
                                        <td>{{ $social->linkdin }}</td>
                                        <td>{!! $social->github !!}</td>
                                        <td>{{ $social->behance }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('social.destroy', $social->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-info" href="{{ route('social.edit', $social->id) }}">Edit</a>
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

