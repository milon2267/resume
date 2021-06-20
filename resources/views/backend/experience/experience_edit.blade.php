@extends('backend.master')

@section('experience_active')
    active
@endsection

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Experience Edit</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Experience Edit</h4>
                        </div>
                        <div class="panel-body ">
                            <form action="{{ route('experience.update', $experience->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="experience" value="{{ $experience->id }}">
                                {{-- Experience Name --}}
                                <div class="form-group">
                                    <label for="experience" class="form-control-label">Experience Name:</label>
                                    <input id="experience" class="form-control m-t-xxs" type="text" name="experience" value="{{ $experience->experience ?? old('experience') }}" placeholder="Experience Name">
                                </div>
                                {{-- Work Name --}}
                                <div class="form-group">
                                    <label for="work" class="form-control-label">Work:</label>
                                    <input id="work" class="form-control m-t-xxs" type="text" name="work" value="{{ $experience->work ?? old('work') }}" placeholder="Work Name">
                                </div>
                                {{-- year Name --}}
                                <div class="form-group">
                                    <label for="year" class="form-control-label">Year:</label>
                                    <input id="year" class="form-control m-t-xxs" type="text" name="year" value="{{ $experience->year ?? old('year') }}" placeholder="year Name">
                                </div>
                                {{-- Icon Name --}}
                                <div class="form-group">
                                    <label for="icon" class="form-control-label">Icon:</label>
                                    <input id="icon" class="form-control m-t-xxs" type="text" name="icon" value="{{ $experience->icon ?? old('icon') }}" placeholder="Icon Name">
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

