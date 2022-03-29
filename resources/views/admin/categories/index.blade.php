@extends('layouts.admin')
@section('content')

    <div class="col">
        @if(session('category_message'))
            <div class="alert alert-info alert-dismissible">
                <a href="#" class="btn-close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Info!</strong>  {{session('category_message')}}
            </div>
        @endif
    </div>
    <div class="row">
        <div class="border border-2 rounded-3 my-3">
            <h1 class="text-center">All Categories</h1>
        </div>
        <table class="table table-striped">
            <thread>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Deleted</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thread>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at->diffForHumans()}}</td>
                    <td>{{$category->updated_at->diffForHumans()}}</td>
                    <td>{{$category->deleted_at}}</td>
                    <td class="d-flex justify-content-center">
                        <a class="btn btn-warning mx-1"
                           href="{{route('postcategories.edit', $category->id)}}">Edit</a>
                        @if($category->deleted_at != null)
                            <a class="btn btn-success" href="{{route('postcategories.restore',$category->id)}}"><i class="fa-solid fa-recycle"></i></a>
                        @else
                            {!! Form::open(['method'=>'DELETE', 'action'=>['App\Http\Controllers\AdminPostsCategoriesController@destroy',$category->id]]) !!}
                            {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger'] )  }}
                            {!! Form::close() !!}
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$categories->links()}}
    </div>

@endsection
