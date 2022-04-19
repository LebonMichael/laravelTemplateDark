@extends('layouts.admin')
@section('content')
    <div class="col-12">
        @include('includes.form_error')
        <div class="card mb-3" style="width:auto;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <div class="m-3 align-items-stretch">
                        <img class="img-fluid img-thumbnail"
                             src="{{$product->photo ? asset('img/products') . $product->photo->file : 'http://via.placeholder.com/400x400'}}"
                             alt="{{$product->name}}">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="fw-bold fs-5" >Name : </span>
                            {{$product->name}}
                        </h5>
                        <p class="card-text">
                            <span class="fw-bold fs-5">Description : </span>
                            {{$product->description}}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold fs-5" >Product Category : </span>
                            {{$product->productcategory ? $product->productcategory->name : 'no category'}}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold fs-5">Brand : </span>
                            {{$product->brand->name}}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold fs-5">Stock : </span>
                            {{$product->stock}}
                        </p>
                        <div>
                            @if($product->keywords)
                                @foreach($product->keywords as $keyword)
                                    <span class="badge badge-pill badge-info">{{$keyword->name}}</span>
                                @endforeach
                            @endif
                        </div>
                        <br>
                        <p class="card-text"><small class="text-muted">{{$product->updated_at->diffForhumans()}}</small>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
