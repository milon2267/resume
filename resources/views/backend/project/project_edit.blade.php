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
                    <li class="active">Project Edit</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Project Edit</h4>
                        </div>
                        <div class="panel-body ">
                            <form action="{{ route('project.update', $project->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="about" value="{{ $project->id }}">
                                {{-- Category Id --}}
                                <div class="form-group">
                                    <label for="category_id" class="form-control-label">Category Id:</label>
                                    <select class="form-control" name="category_id" id="category_id">
                                        <option>Select Category</option>
                                        @foreach ($categories as $category)
                                            <option @if ($category->id == $project->category_id)selected @endif value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- Project File --}}
                                <div class="form-group">
                                    <label for="project_file" class="form-control-label">Project File:</label>
                                    <input id="project_file" class="m-t-xxs" type="file" name="project_file">
                                </div>

                                {{-- Preview Project File --}}
                                <div class="form-group">
                                    <label for="preview_project_file" class="form-control-label" >Preview Project File:</label>
                                    <img id="preview_project_file" class="border p-2" width="100" src="{{ asset('frontend_image/'.$project->created_at->format('Y/m/').$project->id.'/'.$project->project_file) }}" alt="{{ $project->project_file }}">
                                </div>
                                {{-- Live Link --}}
                                <div class="form-group">
                                    <label for="live_link" class="form-control-label">Live Link:</label>
                                    <input id="live_link" class="form-control m-t-xxs" type="link" name="live_link" value="{{ $project->live_link }}">
                                </div>
                                {{-- Git Hub Link --}}
                                <div class="form-group">
                                    <label for="git_link" class="form-control-label">GitHub Link:</label>
                                    <input id="git_link" class="form-control m-t-xxs" type="link" name="git_link" value="{{ $project->git_link }}">
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

