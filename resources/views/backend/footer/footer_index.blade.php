@extends('backend.master')

@section('footer_active')
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
                <li class="active">Footer</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Footer Index</h4>
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
                                    <th>Footer Text</th>
                                    <th>Fiverr</th>
                                    <th>Upwok</th>
                                    <th>Freelancer</th>
                                    <th>Peopleperhour</th>
                                    <th class="text-center" width="150">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Footer View --}}
                                @foreach ($footers as $key => $footer )
                                    <tr role="row" class="odd">
                                        <td>{{ $footer->id }}</td>
                                        <td>{!! $footer->footer_text !!}</td>
                                        <td>{{ $footer->fiverr }}</td>
                                        <td>{{ $footer->upwork }}</td>
                                        <td>{{ $footer->freelancer }}</td>
                                        <td>{{ $footer->peopleperhour }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('footer.destroy', $footer->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-info" href="{{ route('footer.edit', $footer->id) }}">Edit</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                {{-- Footer Add --}}
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h4 class="panel-title">Footer Add</h4>
                    </div>
                    <div class="panel-body ">
                        {{-- Footer Store/Post --}}
                        <form action="{{ route('footer.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Footer Text:</label>
                                <input id="footer_text" class="form-control m-t-xxs" type="footer_text" name="footer_text" placeholder="Footer Text">
                            </div>
                            <div class="form-group">
                                <label for="fiverr">Fiverr:</label>
                                <input id="fiverr" class="form-control m-t-xxs" type="text" name="fiverr" placeholder="Fiverr">
                            </div>
                            <div class="form-group">
                                <label for="upwork">Upwork:</label>
                                <input id="upwork" class="form-control m-t-xxs" type="text" name="upwork" placeholder="Upwork">
                            </div>
                            <div class="form-group">
                                <label for="freelancer">Freelance:</label>
                                <input id="freelancer" class="form-control m-t-xxs" type="text" name="freelancer" placeholder="Freelancer">
                            </div>
                            <div class="form-group">
                                <label for="peopleperhour">Peopleperhour:</label>
                                <input id="peopleperhour" class="form-control m-t-xxs" type="text" name="peopleperhour" placeholder="Peopleperhour">
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

