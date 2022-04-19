@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="border border-2 rounded-3 my-3">
            <h1 class="text-center">Edit Product Category</h1>
        </div>
        <div class="row">
            <div class="col-4 offset-4 img-thumbnail">
                @include('includes.form_error')
                <form action="{{route('productcategories.update', $productcategory->id)}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" value="{{$productcategory->name}}" placeholder="Category...">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" id="" cols="100%" placeholder="Description..." rows="10">@if($productcategory->description){{$productcategory->description}} @endif</textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Product Category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
