@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="border border-2 rounded-3 my-3">
            <h1 class="text-center">All Categories</h1>
        </div>
        <div class="col-4 offset-4 img-thumbnail">
            @include('includes.form_error')
            <form action="{{route('categories.update', $category->id)}}" method="POST">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label class="text-black" for="category">Category Name : </label>
                    <input type="text" name="name" class="form-control bg-black" value="{{$category->name}}" placeholder="Category...">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update Category</button>
                </div>
            </form>
        </div>
    </div>
@endsection
