@extends('backend.master')

@section('about_active')
    active
@endsection

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">About Edit</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">About Edit</h4>
                        </div>
                        <div class="panel-body ">
                            <form action="{{ route('about.update', $about->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="about" value="{{ $about->id }}">
                                {{-- Title Name --}}
                                <div class="form-group">
                                    <label for="title" class="form-control-label">Title Name:</label>
                                    <input id="title" class="form-control m-t-xxs" type="text" name="title" value="{{ $about->title ?? old('title') }}" placeholder="Title Name">
                                </div>

                                {{-- Main Image --}}
                                <div class="form-group">
                                    <label for="image" class="form-control-label">Image:</label>
                                    <input id="image" class="m-t-xxs" type="file" name="image">
                                </div>

                                {{-- Preview Image --}}
                                <div class="form-group">
                                    <label for="preview_main_image" class="form-control-label" >Preview Image:</label>
                                    <img id="preview_main_image" class="border p-2" width="100" src="{{ asset('frontend_image/'.$about->created_at->format('Y/m/').$about->id.'/'.$about->image) }}" alt="{{ $about->image }}">
                                </div>
                                {{-- Download Link --}}
                                <div class="form-group">
                                    <label for="download_link" class="form-control-label">Download Link:</label>
                                    <input id="download_link" class="form-control m-t-xxs" type="text" name="download_link" placeholder="download link">
                                </div>
                                {{-- Description --}}
                                <div class="form-group">
                                    <label for="description" class="form-control-label">Description:</label>
                                    <textarea class="form-control m-t-xxs" name="description" id="description" value="{{ $about->description ?? old('description') }}" cols="30" rows="10"></textarea>
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

