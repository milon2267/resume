@extends('backend.master')

@section('review_active')
    active
@endsection

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Review Edit</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Review Edit</h4>
                        </div>
                        <div class="panel-body ">
                            <form action="{{ route('review.update', $review->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                
                                {{-- Client Name --}}
                                <div class="form-group">
                                    <label for="name" class="form-control-label">Client Name:</label>
                                    <input id="name" class="form-control m-t-xxs" type="text" name="name" value="{{ $review->name ?? old('name') }}" placeholder="Client Name">
                                </div>
                                
                                {{-- Country Name --}}
                                <div class="form-group">
                                    <label for="country" class="form-control-label">Country Name:</label>
                                    <input id="country" class="form-control m-t-xxs" type="text" name="country" value="{{ $review->country ?? old('country') }}" placeholder="Country Name">
                                </div>

                                {{-- Main Image --}}
                                <div class="form-group">
                                    <label for="image" class="form-control-label">Image:</label>
                                    <input id="image" class="m-t-xxs" type="file" name="image">
                                </div>

                                {{-- Preview Image --}}
                                <div class="form-group">
                                    <label for="preview_image" class="form-control-label" >Preview Image:</label>
                                    <img id="preview_image" class="border p-2" width="100" src="{{ asset('frontend_image/review/'.$review->created_at->format('Y/m/').$review->id.'/'.$review->image) }}" alt="{{ $review->image }}">
                                </div>

                                {{--  Ranking --}}
                                <div class="form-group">
                                    <label for="star" class="form-control-label">Ranking:</label>
                                    <input id="star" class="form-control m-t-xxs" type="text" name="star" value="{{ $review->star ?? old('star') }}" placeholder="Ranking">
                                </div>
                                
                                {{-- Summary --}}
                                <div class="form-group">
                                    <label for="summary" class="form-control-label">Summary:</label>
                                    <textarea class="form-control m-t-xxs" name="summary" id="summary" cols="30" rows="10">{{ $review->summary ?? old('summary') }}</textarea>
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

