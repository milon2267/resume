@extends('backend.master')

@section('education_active')
    active
@endsection

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Education Edit</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Education Edit</h4>
                        </div>
                        <div class="panel-body ">
                            <form action="{{ route('education.update', $education->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="education" value="{{ $education->id }}">
                                {{-- University Name --}}
                                <div class="form-group">
                                    <label for="university" class="form-control-label">University Name:</label>
                                    <input id="university" class="form-control m-t-xxs" type="text" name="university" value="{{ $education->university ?? old('university') }}" placeholder="University Name">
                                </div>
                                {{-- Graduation Name --}}
                                <div class="form-group">
                                    <label for="graduation" class="form-control-label">Graduation:</label>
                                    <input id="graduation" class="form-control m-t-xxs" type="text" name="graduation" value="{{ $education->graduation ?? old('graduation') }}" placeholder="Graduation Name">
                                </div>
                                {{-- year Name --}}
                                <div class="form-group">
                                    <label for="year" class="form-control-label">Year:</label>
                                    <input id="year" class="form-control m-t-xxs" type="text" name="year" value="{{ $education->year ?? old('year') }}" placeholder="year Name">
                                </div>
                                {{-- Icon Name --}}
                                <div class="form-group">
                                    <label for="icon" class="form-control-label">Icon:</label>
                                    <input id="icon" class="form-control m-t-xxs" type="text" name="icon" value="{{ $education->icon ?? old('icon') }}" placeholder="Icon Name">
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

