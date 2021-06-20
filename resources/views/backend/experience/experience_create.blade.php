
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
                    <li class="active">Experience</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    {{-- Experience Add --}}
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Experience Add</h4>
                        </div>
                        <div class="panel-body ">
                            {{-- Experience Store/Post --}}
                            <form action="{{ route('experience.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="experience" class="form-control-label">Experience Name:</label>
                                    <input id="experience" class="form-control m-t-xxs" type="text" name="experience" placeholder="Experience Name">
                                </div>
                                <div class="form-group">
                                    <label for="work" class="form-control-label">Work:</label>
                                    <input id="work" class="form-control m-t-xxs" type="text" name="work" placeholder="Work">
                                </div>
                                <div class="form-group">
                                    <label for="year" class="form-control-label">Year:</label>
                                    <input id="year" class="form-control m-t-xxs" type="text" name="year" placeholder="Year">
                                </div>
                                <div class="form-group">
                                    <label for="icon" class="form-control-label">Icon:</label>
                                    <input id="icon" class="form-control m-t-xxs" type="text" name="icon" placeholder="Icon">
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

