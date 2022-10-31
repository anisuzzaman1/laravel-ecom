@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Add Category
                    <a href="{{ url('admin/category/create') }}" class="btn btn-primary btn-sm text-white float-end">Back</a>
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <lebel>Name</lebel>
                            <input type="text" name="name" id="" class="form-control" />
                            @error('name') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <lebel>Slug</lebel>
                            <input type="text" name="slug" id="" class="form-control" />
                            @error('slug') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <lebel>Description</lebel>
                            <textarea name="description" rows="3" class="form-control"></textarea>
                            @error('description') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <lebel>Image</lebel>
                            <input type="file" name="image" id="" class="form-control" />
                            @error('image') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <lebel>Status</lebel><br />
                            <input type="checkbox" name="status" />
                        </div>
                        <div class="col-md-12">
                            <h4>SEO Tags</h4>
                        </div>
                        <div class="col-md-12 mb-3">
                            <lebel>Meta Title</lebel>
                            <input type="text" name="meta_title" id="" class="form-control" />
                            @error('meta_title') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <lebel>Meta Keyword</lebel>
                            <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
                            @error('meta_keyword') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <lebel>Meta Description</lebel>
                            <textarea name="meta_description" rows="3" class="form-control"></textarea>
                            @error('meta_description') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <button type="submit" class="btn btn-primary float-end">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection