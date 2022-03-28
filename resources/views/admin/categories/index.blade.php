@extends('layouts.admin')
@section('content')

    <div class="col">
        @if(Session::has('user_message'))
            <p class="alert alert-info" >{{session('user_message')}}</p>
        @endif
    </div>
    <div class="row">
        <div class="border border-2 rounded-3 my-3">
            <h1 class="text-center">All Users</h1>
        </div>
        <table class="table table-striped">
            <thread>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                    <th>Deleted</th>
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
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$categories->render()}}
    </div>

@endsection
