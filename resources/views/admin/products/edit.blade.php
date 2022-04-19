@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="border border-2 rounded-3 my-3">
            <h1 class="text-center">Edit Product</h1>
        </div>
        <div class="row py-3">
            <div class="col-8 offset-2 img-thumbnail">
                <div class="row">
                    <div class="col-8">
                        @include('includes.form_error')
                        <form action="{{route('products.update', $product->id)}}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label class="text-black" for="name">Name:</label>
                                <input value="{{$product->name}}" type="text" name="name" id="name"
                                       class="form-control bg-black" placeholder="{{$product->name}}">
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="brand">Brand:</label>
                                <select name="brand_id" class="form-control custom-select bg-black">
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}"
                                                @if($product->brand_id == $brand->id) selected @endif>{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="category_id">Product Category:</label>
                                <select name="category_id" class="form-control custom-select bg-black">
                                    @foreach($productcategories as $category)
                                        <option value="{{$category->id}}"
                                                @if($product->product_category_id == $category->id) selected @endif >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="text-black" for="keyword">Keyword (CTRL + CLICK multiple select)</label>
                                <select name="keywords[]" class="form-control custom-select bg-black" multiple>
                                    @foreach($keywords as $keyword)
                                        <option value="{{$keyword->id}}"
                                                @if($product->keywords->contains($keyword->id)) selected @endif>{{$keyword->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="description">Desciption:</label>
                                <textarea class="form-control bg-black" name="description" id="description" cols="100%"
                                          rows="10"
                                          placeholder="{{$product->description}}">{{$product->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="stock">Stock:</label>
                                <input value="{{$product->stock}}" type="number" name="stock" id="stock"
                                       class="form-control bg-black" placeholder="Stock...">
                            </div>
                            <div class="form-group">
                                <label class="text-black me-3" for="file">Product Photo:</label>
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Your Product Picture</h4>
                                            <input type="file" name="photo_id" class="dropify" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Product</button>
                        </form>
                    </div>
                    <div class="col-4">
                        <p class="text-black">Profile Photo</p>
                        <img class="img-fluid img-thumbnail"
                             src="{{$product->photo ? asset('img/products') . $product->photo->file : 'https://via.placeholder.com/500'}}"
                             alt="{{$product->name}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
