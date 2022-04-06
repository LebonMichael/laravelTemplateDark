@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="row">
            <div class="col-12 mb-3">
                <div class="border border-2 rounded-3 my-3">
                    <h1 class="text-center">All Products</h1>
                </div>
                <div class="border border-2 rounded-3 my-3">
                    <form>
                        <input type="text" name="search" class="form-control bg-gray-300 border-0 small"
                               placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    </form>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('products.index')}}"
                       class="badge badge-primary m-1 p-3">All</a>
                    @foreach($brands as $brand)
                        <a href="{{route('productsPerBrand', $brand->id)}}"
                           class="badge badge-primary m-1 p-3">{{$brand->name}}</a>
                    @endforeach
                </div>
            </div>
        </div>

        <table class="table table-striped bg-gradient">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Category</th>
                <th>Brand</th>
                <th>Keywords</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($products)
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>
                            <img width="auto" height="62"
                                 src="{{$product->photo ? asset('img/products') . $product->photo->file : 'http://via.placeholder.com/62'}}"
                                 alt="{{$product->name}}">
                        </td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->productcategory ? $product->productcategory->name : 'no category'}}</td>
                        <td>{{$product->brand ? $product->brand->name : 'no brand'}}</td>
                        <td>
                            @if($product->keywords)
                                @foreach($product->keywords as $keyword)
                                    <span class="badge badge-pill badge-info">{{$keyword->name}}</span>
                                @endforeach
                            @endif
                        </td>
                        <td>{{$product->description}}</td>
                        <td>€ {{$product->price}}</td>
                        <td>{{$product->stock}}</td>
                        <td>{{$product->created_at->diffForHumans()}}</td>
                        <td>{{$product->updated_at->diffForHumans()}}</td>
                        <td class="d-flex">
                            <a class="btn btn-info btn-sm m-1" href="{{route('products.show', $product->id)}}">Show</a>
                            <a class="btn btn-warning btn-sm m-1" href="{{route('products.edit', $product->id)}}">Edit</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8" class="alert alert-warning">
                        {{session('products_message')}}
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
        <div class="text-center">
            {{$products->links()}}
        </div>
    </div>
@stop
