@extends('backend.master')

@section('footer_active')
    active
@endsection

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Footer Edit</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Footer Edit</h4>
                        </div>
                        <div class="panel-body ">
                            <form action="{{ route('footer.update', $footer->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <input type="hidden" name="footer" value="{{ $footer->id }}">
                                {{-- Fiverr --}}
                                <div class="form-group">
                                    <label for="fiverr">Fiverr:</label>
                                    <input id="fiverr" class="form-control m-t-xxs" type="text" name="fiverr" value="{{ $footer->fiverr }}">
                                </div>
                                {{-- Upwork --}}
                                <div class="form-group">
                                    <label for="upwork">Upwork:</label>
                                    <input id="upwork" class="form-control m-t-xxs" type="text" name="upwork" value="{{ $footer->upwork }}">
                                </div>
                                {{-- Freelancer --}}
                                <div class="form-group">
                                    <label for="freelancer">Freelance:</label>
                                    <input id="freelancer" class="form-control m-t-xxs" type="text" name="freelancer" value="{{ $footer->freelancer }}">
                                </div>
                                {{-- Peopleperhour --}}
                                <div class="form-group">
                                    <label for="peopleperhour">Peopleperhour:</label>
                                    <input id="peopleperhour" class="form-control m-t-xxs" type="text" name="peopleperhour" value="{{ $footer->peopleperhour }}">
                                </div>
                                {{-- Footer Text --}}
                                <div class="form-group">
                                    <label for="footer_text" class="form-control-label">Footer Text:</label>
                                    <textarea class="form-control m-t-xxs" name="footer_text" id="footer_text" cols="30" rows="10">{!! $footer->footer_text !!}</textarea>
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
        CKEDITOR.replace('footer_text', options);
      </script>
@endsection

