@extends('backend.master')

@section('message_active')
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
                    </div>
                    <div class="col-md-12">
                        <div class="row mailbox-header">
                            <div class="col-md-2">
                                <a href="compose.html" class="btn btn-info btn-block">Compose</a>
                            </div>
                            <div class="col-md-6">
                                <h2>Inbox</h2>
                            </div>
                            <div class="col-md-4">
                                <form action="#" method="GET">
                                    <div class="input-group">
                                        <input type="text" name="search" class="form-control input-search" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div><!-- Input Group -->
                                </form>
                           </div>
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
                        <div class="col-md-12">
                            <div class="mailbox-content">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="1" class="hidden-xs">
                                            <span><input type="checkbox" class="check-mail-all"></span>
                                        </th>
                                        <th class="text-right" colspan="5">
                                            <span class="text-muted m-r-sm">20 of 346 </span>
                                            <a class="btn btn-default m-r-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>
                                            <div class="btn-group m-r-sm mail-hidden-options" style="display: none;">
                                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Report Spam"><i class="fa fa-exclamation-circle"></i></a>
                                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as Important"><i class="fa fa-star"></i></a>
                                                <a class="btn btn-default" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mark as Read"><i class="fa fa-pencil"></i></a>
                                            </div>
                                            <div class="btn-group m-r-sm mail-hidden-options" style="display: none;">
                                                <div class="btn-group">
                                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-folder"></i> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                        <li><a href="#">Social</a></li>
                                                        <li><a href="#">Forums</a></li>
                                                        <li><a href="#">Updates</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Spam</a></li>
                                                        <li><a href="#">Trash</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">New</a></li>
                                                    </ul>
                                                </div>
                                                <div class="btn-group">
                                                    <a class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tags"></i> <span class="caret"></span></a>
                                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                                        <li><a href="#">Work</a></li>
                                                        <li><a href="#">Family</a></li>
                                                        <li><a href="#">Social</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Primary</a></li>
                                                        <li><a href="#">Promotions</a></li>
                                                        <li><a href="#">Forums</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="btn-group">
                                                <a class="btn btn-default"><i class="fa fa-angle-left"></i></a>
                                                <a class="btn btn-default"><i class="fa fa-angle-right"></i></a>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Google
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            21 march
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Themeforest
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            20 march
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Adobe
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                            <i class="fa fa-paperclip"></i>
                                        </td>
                                        <td>
                                            18 march
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Apple
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                            <i class="fa fa-paperclip"></i>
                                        </td>
                                        <td>
                                            14 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Microsoft
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                            <i class="fa fa-paperclip"></i>
                                        </td>
                                        <td>
                                            11 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Microsoft
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            11 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Microsoft
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Microsoft
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Microsoft
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Themeforest
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Themeforest
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Themeforest
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Dropbox
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Dropbox
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Twitter
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Twitter
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star icon-state-warning"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Twitter
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                            <i class="fa fa-paperclip"></i>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Twitter
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="unread">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Themeforest
                                        </td>
                                        <td>
                                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                    <tr class="read">
                                        <td class="hidden-xs">
                                            <span><input type="checkbox" class="checkbox-mail"></span>
                                        </td>
                                        <td class="hidden-xs">
                                            <i class="fa fa-star"></i>
                                        </td>
                                        <td class="hidden-xs">
                                            Themeforest
                                        </td>
                                        <td>
                                            Nullam quis risus eget urna mollis ornare vel eu leo
                                        </td>
                                        <td>
                                        </td>
                                        <td>
                                            6 march
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                        </div>
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

