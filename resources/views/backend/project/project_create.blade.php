
@extends('backend.master')

@section('project_active')
    active
@endsection

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Project Add</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    {{-- Project Add --}}
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Project Add</h4>
                        </div>
                        <div class="panel-body ">
                            {{-- Project Store/Post --}}
                            <form action="{{ route('project.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="category_id" class="form-control-label">Category Id:</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="project_file" class="form-control-label">Project File:</label>
                                    <input id="project_file" class="m-t-xxs" type="file" name="project_file">
                                </div>
                                <div class="form-group">
                                    <label for="live_link" class="form-control-label">Live Link:</label>
                                    <input id="live_link" class="form-control m-t-xxs" type="text" name="live_link" placeholder="Live link">
                                </div>
                                <div class="form-group">
                                    <label for="git_link" class="form-control-label">Git Link:</label>
                                    <input id="git_link" class="form-control m-t-xxs" type="text" name="git_link" placeholder="Git link">
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

