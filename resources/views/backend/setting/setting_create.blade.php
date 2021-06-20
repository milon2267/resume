
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
                    <li class="active">Setting</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    {{-- Banner Add --}}
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Setting Add</h4>
                        </div>
                        <div class="panel-body ">
                            {{-- Setting Store/Post --}}
                            <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group col-md-12">
                                    <label for="side_title" class="form-control-label">Side Title:</label>
                                    <input id="side_title" class="form-control m-t-xxs" type="text" name="side_title" placeholder="Title Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="meta_description" class="form-control-label">Meta description:</label>
                                    <textarea class="form-control m-t-xxs" name="meta_description" id="meta_description" cols="30" rows="10"></textarea>
                                </div>
                                <div class="form-row" >
                                    <div class="form-group col-md-3">
                                        <label for="logo" class="form-control-label">Logo:</label>
                                        <input id="logo" class=" m-t-xxs" type="file" name="logo" placeholder="Logo">
                                    </div>
                                    <div class="col-md-3" id="image_preview"></div>
                                    <div class="form-group col-md-3">
                                        <label for="feb_icon" class="form-control-label">Fab Icon:</label>
                                        <input id="favicon" class="m-t-xxs" type="file" name="feb_icon">
                                    </div>
                                    <div class="col-md-3" id="image_preview2"></div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="copy_right_text" class="form-control-label">Copy Right Text:</label>
                                    <textarea class="form-control m-t-xxs" name="copy_right_text" id="copy_right_text" rows="10"></textarea>
                                </div>
                                <div class="form-row" >
                                    <div class="text-center col-md-6 col-md-offset-3">
                                        <button class="btn btn-info">Submit</button>
                                    </div>
                                    
                                </div>
                                
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
    <script>
        // Multiple images preview in browser
        $(function() {
            var imagesPreview = function(input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img width="150" class="mr-2">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };

            var imagesPreview2 = function(input, placeToInsertImagePreview) {
                if (input.files) {
                    var filesAmount = input.files.length;
                    for (i = 0; i < filesAmount; i++) {
                        var reader = new FileReader();
                        reader.onload = function(event) {
                            $($.parseHTML('<img width="150" class="mr-2">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                        }
                        reader.readAsDataURL(input.files[i]);
                    }
                }
            };

            $('#logo').on('change', function() {
                imagesPreview(this, 'div#image_preview');
            });

            $('#favicon').on('change', function() {
                imagesPreview2(this, 'div#image_preview2');
            });
        });
    </script>
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

