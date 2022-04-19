@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="border border-2 rounded-3 my-3">
            <h1 class="text-center">Create Product</h1>
        </div>
        <div class="col-8 offset-2 img-thumbnail">
            @include('includes.form_error')
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="text-black" for="name">Name : </label>
                    <input type="text" name="name" id="name" class="form-control bg-black" placeholder="Title...">
                </div>
                <div class="form-group">
                    <label class="text-black" for="brand">Brand : </label>
                    <select name="brand_id" class="form-control custom-select bg-black">
                        @foreach($brands as $brand)
                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-black" for="brand">Product Category : </label>
                    <select name="category_id" class="form-control custom-select bg-black">
                        @foreach($productcategories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="text-black" for="keyword">Keyword : (CTRL + CLICK multiple select)</label>
                    <select name="keywords[]" class="form-control custom-select bg-black" multiple>
                        @foreach($keywords as $keyword)
                            <option value="{{$keyword->id}}">{{$keyword->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="text-black" for="description">Description : </label>
                    <textarea class="form-control bg-black" name="description" id="description" cols="100%" rows="10" placeholder="Description..."></textarea>
                </div>
                <div class="form-group">
                    <label class="text-black" for="stock">Stock : </label>
                    <input type="number" name="stock" id="stock" class="form-control bg-black" placeholder="Stock...">
                </div>
                <div class="form-group">
                    <label class="text-black" for="price">Price : </label>
                    <input type="number" name="price" id="price" class="form-control bg-black" placeholder="Price...">
                </div>
                <div class="form-group">
                    <label class="text-black" for="photo_id">Photo Product : </label>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Your so fresh input file — Default version</h4>
                                <input type="file" name="photo_id" class="dropify" />
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>

@endsection
