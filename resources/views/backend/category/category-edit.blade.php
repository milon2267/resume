@extends('backend.master')

@section('content')
    <div class="page-inner" style="min-height:663px !important">
        <div class="page-title">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h4 class="panel-title">Category Edit</h4>
                        </div>
                        <div class="panel-body ">
                            <form action="{{ route('category.update', $category->id) }}" method="post">
                                @csrf
                                @method('put')
                                <div class="form-group">
                                    <label for="">Category Name:</label>
                                    <input id="category" class="form-control m-t-xxs" type="name" name="category_name" value="{{ $category->category_name }}" placeholder="Category Name">
                                </div>
                                <div class="form-group">
                                    <label for="">Category Slug:</label>
                                    <input id="slug" class="form-control m-t-xxs" type="text" name="slug" value="{{ $category->slug }}" placeholder="Category Slug">
                                </div>
                                
                                <button class="btn btn-success">Submit</button>
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

