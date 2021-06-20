
@extends('backend.master')

@section('social_active')
    active
@endsection

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Social</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    {{-- Experience Add --}}
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Social Add</h4>
                        </div>
                        <div class="panel-body ">
                            {{-- Experience Store/Post --}}
                            <form action="{{ route('social.store') }}" method="post" >
                                @csrf
                                <div class="form-group">
                                    <label for="facebook">Facebook:</label>
                                    <input id="facebook" class="form-control m-t-xxs" type="text" name="facebook" placeholder="Facebook">
                                </div>
                                <div class="form-group">
                                    <label for="twitter">Twitter:</label>
                                    <input id="twitter" class="form-control m-t-xxs" type="text" name="twitter" placeholder="Twitter">
                                </div>
                                <div class="form-group">
                                    <label for="linkdin">Linkdin:</label>
                                    <input id="linkdin" class="form-control m-t-xxs" type="text" name="linkdin" placeholder="Linkdin">
                                </div>
                                <div class="form-group">
                                    <label for="github">Github:</label>
                                    <input id="github" class="form-control m-t-xxs" type="text" name="github" placeholder="Github">
                                </div>
                                <div class="form-group">
                                    <label for="behance">Behance:</label>
                                    <input id="behance" class="form-control m-t-xxs" type="text" name="behance" placeholder="Behance">
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

