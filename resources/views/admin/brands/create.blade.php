@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="border border-2 rounded-3 my-3">
            <h1 class="text-center">Create brand</h1>
        </div>
        <div class="col-4 offset-4 img-thumbnail">
            @include('includes.form_error')
            <form action="{{route('brands.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="text-black" for="name">Brand Name :</label>
                    <input type="text" name="name" class="form-control bg-black" placeholder="Brand...">
                </div>
                <div class="form-group">
                    <label class="text-black" for="name">Brand Description :</label>
                    <textarea class="form-control bg-black" name="description" id="description" cols="100%" rows="10"
                              placeholder="Description..."></textarea>
                </div>
                <div class="form-group">
                    <label class="text-black" for="photo_id">Photo Brand : </label>
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
                    <button type="submit" class="btn btn-primary">Add Brand</button>
                </div>
            </form>
        </div>
    </div>
@endsection
