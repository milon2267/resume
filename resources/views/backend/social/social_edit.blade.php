@extends('backend.master')

@section('social_active')
    active
@endsection

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Social Edit</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Social Edit</h4>
                        </div>
                        <div class="panel-body ">
                            <form action="{{ route('social.update', $social->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="social" value="{{ $social->id }}">
                                <div class="form-group">
                                    <label for="facebook">Facebook:</label>
                                    <input id="facebook" class="form-control m-t-xxs" type="text" name="facebook" value="{{ $social->facebook }}">
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Twitter:</label>
                                    <input id="twitter" class="form-control m-t-xxs" type="text" name="twitter" value="{{ $social->twitter }}">
                                </div>
                                <div class="form-group">
                                    <label for="linkdin">Linkdin:</label>
                                    <input id="linkdin" class="form-control m-t-xxs" type="text" name="linkdin" value="{{ $social->linkdin }}">
                                </div>
                                <div class="form-group">
                                    <label for="github">Github:</label>
                                    <input id="github" class="form-control m-t-xxs" type="text" name="github" value="{{ $social->github }}">
                                </div>
                                <div class="form-group">
                                    <label for="behance">Behance:</label>
                                    <input id="behance" class="form-control m-t-xxs" type="text" name="behance" value="{{ $social->behance }}">
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
    <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
    <script>
        var options = {
          filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
          filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
          filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
          filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        };
        CKEDITOR.replace('footer_text', options);
      </script>
@endsection

