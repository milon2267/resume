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
                    <li class="active">Skill Edit</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Skill Edit</h4>
                        </div>
                        <div class="panel-body ">
                            <form action="{{ route('skill.update', $skill->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="skill" value="{{ $skill->id }}">
                                {{-- Title Name --}}
                                <div class="form-group">
                                    <label for="title" class="form-control-label">title Name:</label>
                                    <input id="title" class="form-control m-t-xxs" type="text" name="title" value="{{ $skill->title ?? old('title') }}" placeholder="Title Name">
                                </div>
                                {{-- Percentage Name --}}
                                <div class="form-group">
                                    <label for="percentage" class="form-control-label">Percentage:</label>
                                    <input id="percentage" class="form-control m-t-xxs" type="text" name="percentage" value="{{ $skill->percentage ?? old('percentage') }}" placeholder="Percentage Name">
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

