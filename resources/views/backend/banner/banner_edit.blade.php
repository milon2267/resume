@extends('backend.master')

@section('banner_active')
    active
@endsection

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Banner Edit</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Banner Edit</h4>
                        </div>
                        <div class="panel-body ">
                            <form action="{{ route('banner.update', $banner->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="banner" value="{{ $banner->id }}">
                                {{-- Title Name --}}
                                <div class="form-group">
                                    <label for="title" class="form-control-label">Title Name:</label>
                                    <input id="title" class="form-control m-t-xxs" type="text" name="title" value="{{ $banner->title ?? old('title') }}" placeholder="Title Name">
                                </div>
                                {{-- Sub Title Name --}}
                                <div class="form-group">
                                    <label for="sub_title" class="form-control-label">Sub Title:</label>
                                    <input id="sub_title" class="form-control m-t-xxs" type="text" name="sub_title" value="{{ $banner->sub_title ?? old('sub_title') }}" placeholder="Sub Title Name">
                                </div>
                                {{-- Main Image --}}
                                <div class="form-group">
                                    <label for="main_image" class="form-control-label">Main Image:</label>
                                    <input id="main_image" class="m-t-xxs" type="file" name="main_image">
                                </div>

                                {{-- Preview Image --}}
                                <div class="form-group">
                                    <label for="preview_main_image" class="form-control-label" >Preview Main Image:</label>
                                    <img id="preview_main_image" class="border p-2" width="100" src="{{ asset('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/'.$banner->main_image) }}" alt="{{ $banner->main_image }}">
                                </div>
                                {{-- Background Image --}}
                                <div class="form-group">
                                    <label for="bg_image" class="form-control-label">BG Image:</label>
                                    <input id="bg_image" class="m-t-xxs" type="file" name="bg_image">
                                </div>

                                {{-- Preview Background Image --}}
                                <div class="form-group">
                                    <label for="preview_bg_image" class="form-control-label" >Preview BG Image:</label>
                                    <img id="preview_bg_image" class="border p-2" width="100" src="{{ asset('frontend_image/'.$banner->created_at->format('Y/m/').$banner->id.'/'.$banner->bg_image) }}" alt="{{ $banner->bg_image }}">
                                </div>
                                {{-- Button One --}}
                                <div class="form-group">
                                    <label for="button_1" class="form-control-label">Button One:</label>
                                    <input id="button_1" class="form-control m-t-xxs" type="text" name="button_1" placeholder="Button_1 link">
                                </div>
                                {{-- Button Two --}}
                                <div class="form-group">
                                    <label for="button_2" class="form-control-label">Button Two:</label>
                                    <input id="button_2" class="form-control m-t-xxs" type="text" name="button_2" placeholder="button_2 link">
                                </div>
                                {{-- Description --}}
                                <div class="form-group">
                                    <label for="description" class="form-control-label">Description:</label>
                                    <textarea class="form-control m-t-xxs" name="description" id="description" value="{{ $banner->description ?? old('description') }}" cols="30" rows="10"></textarea>
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

