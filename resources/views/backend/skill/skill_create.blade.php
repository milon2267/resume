
@extends('backend.master')

@section('skill_active')
    active
@endsection

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Skill</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    {{-- Skill Add --}}
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Skill Add</h4>
                        </div>
                        <div class="panel-body ">
                            {{-- Skill Store/Post --}}
                            <form action="{{ route('skill.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="title" class="form-control-label">Title Name:</label>
                                    <input id="title" class="form-control m-t-xxs" type="text" name="title" placeholder="Title Name">
                                </div>
                                <div class="form-group">
                                    <label for="percentage" class="form-control-label">Percentage:</label>
                                    <input id="percentage" class="form-control m-t-xxs" type="text" name="percentage" placeholder="Percentage">
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
        CKEDITOR.replace('description', options);
      </script>
@endsection

