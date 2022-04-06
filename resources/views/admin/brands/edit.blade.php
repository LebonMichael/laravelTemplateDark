@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="border border-2 rounded-3 my-3">
            <h1 class="text-center">Edit brand</h1>
        </div>
        <div class="row py-3">
            <div class="col-8 offset-2 img-thumbnail">
                <div class="row">
                    <div class="col-6">
                        @include('includes.form_error')
                        <form action="{{route('brands.update', $brand->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label class="text-black" for="name">Name:</label>
                                <input type="text" name="name" class="form-control bg-black" value="{{$brand->name}}"
                                       placeholder="Brand...">
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="description">Name:</label>
                                <textarea class="form-control bg-black" name="description" id="description" cols="100%" rows="10"
                                    placeholder="Description...">{{$brand->description}}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="photo_id">Photo Product:</label>
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Your Brand Picture</h4>
                                            <input type="file" name="photo_id" class="dropify"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Edit Brand</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-6">
                        <p class="text-black">Profile Photo:</p>
                        <img class="img-fluid img-thumbnail"
                             src="{{$brand->photo ? asset('img/brands') . $brand->photo->file : 'https://via.placeholder.com/500'}}"
                             alt="{{$brand->name}}">
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
