@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="col">
            @if(session('brand_message'))
                <div class="alert alert-info alert-dismissible">
                    <a href="#" class="btn-close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Info!</strong>  {{session('brand_message')}}
                </div>
            @endif
        </div>
        <h1>Brand</h1>
        <table class="table table-striped bg-gradient">
            <thead>
            <tr>
                <th>Id</th>
                <th>Photo</th>
                <th>Name</th>
                <th>Description</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @if($brands)
                @foreach($brands as $brand)
                    <tr>
                        <td>{{$brand->id}}</td>
                        <td>
                            <img width="auto" height="62"
                                 src="{{$brand->photo ? asset('img/brands') . $brand->photo->file : 'http://via.placeholder.com/62'}}"
                                 alt="{{$brand->name}}">
                        </td>
                        <td>{{$brand->name}}</td>
                        <td>{{$brand->description}}</td>
                        <td>{{$brand->created_at->diffForHumans()}}</td>
                        <td>{{$brand->updated_at->diffForHumans()}}</td>
                        <td class="d-flex justify-content-around">
                            <a class="btn btn-warning" href="{{route('brands.edit', $brand->id)}}">Edit</a>
                            <form action="{{route('brands.destroy', $brand->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8" class="alert alert-warning">
                        {{session('user_message')}}l
                    </td>
                </tr>
            @endif
            </tbody>
        </table>
        <div class="text-center">
            {{$brands->links()}}
        </div>
    </div>
@stop
