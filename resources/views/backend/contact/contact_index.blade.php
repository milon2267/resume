@extends('backend.master')

@section('contact_active')
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
                <li class="active">Contact</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Contact Index</h4>
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
                                    <th>Home</th>
                                    <th>Office</th>
                                    <th>mail</th>
                                    <th>mail1</th>
                                    <th>address</th>
                                    <th class="text-center" width="200">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- Contact View --}}
                                @foreach ($contacts as $key => $contact )
                                    <tr role="row" class="odd">
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->home }}</td>
                                        <td>{{ $contact->office }}</td>
                                        <td>{{ $contact->mail }}</td>
                                        <td>{{ $contact->mail1 }}</td>
                                        <td>{{ $contact->address }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('contact.destroy', $contact->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a class="btn btn-info" href="{{ route('contact.edit', $contact->id) }}">Edit</a>
                                                <button style="cursor: pointer" class="btn btn-danger">Delete</button>
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
                {{-- Category Add --}}
                <div class="panel panel-white">
                    <div class="panel-heading">
                        <h4 class="panel-title">Contact Add</h4>
                    </div>
                    <div class="panel-body ">
                        {{-- Category Store/Post --}}
                        <form action="{{ route('contact.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="home">Home:</label>
                                <input id="home" class="form-control m-t-xxs" type="number" name="home" placeholder="Home Number">
                            </div>
                            <div class="form-group">
                                <label for="office">Office:</label>
                                <input id="office" class="form-control m-t-xxs" type="number" name="office" placeholder="Office Number">
                            </div>
                            <div class="form-group">
                                <label for="mail">Mail:</label>
                                <input id="mail" class="form-control m-t-xxs" type="mail" name="mail" placeholder="Mail">
                            </div>
                            <div class="form-group">
                                <label for="mail1">Mail Another:</label>
                                <input id="mail1" class="form-control m-t-xxs" type="mail1" name="mail1" placeholder="Mail Another">
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input id="address" class="form-control m-t-xxs" type="address" name="address" placeholder="Address">
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

