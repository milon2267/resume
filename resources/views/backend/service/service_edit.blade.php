@extends('backend.master')

@section('service_active')
    active
@endsection

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Service Edit</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Service Edit</h4>
                        </div>
                        <div class="panel-body ">
                            <form action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="service" value="{{ $service->id }}">
                                {{-- Title Name --}}
                                <div class="form-group">
                                    <label for="title" class="form-control-label">title Name:</label>
                                    <input id="title" class="form-control m-t-xxs" type="text" name="title" value="{{ $service->title ?? old('title') }}" placeholder="title Name">
                                </div>
                                {{-- Icon Name --}}
                                <div class="form-group">
                                    <label for="icon" class="form-control-label">Icon:</label>
                                    <input id="icon" class="form-control m-t-xxs" type="text" name="icon" value="{{ $service->icon ?? old('icon') }}" placeholder="Icon Name">
                                </div>
                                {{-- Summary --}}
                                <div class="form-group">
                                    <label for="summary" class="form-control-label">Summary:</label>
                                    <textarea class="form-control m-t-xxs" name="summary" id="summary" cols="30" rows="10">{{ $service->summary }}</textarea>
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
        CKEDITOR.replace('summary', options);
      </script>
@endsection

