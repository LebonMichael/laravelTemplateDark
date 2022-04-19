@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="border border-2 rounded-3 my-3">
            <h1 class="text-center">Create Product Category</h1>
        </div>
        <div class="row">
            <div class="col-4 offset-4 img-thumbnail">
                @include('includes.form_error')
                <form action="{{route('productcategories.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Product Category...">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="description" id="description" cols="100%" rows="10"></textarea>
                    </div>
                    <div class="text-center" >
                        <button type="submit" class="btn btn-primary">Add Product Category</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
