@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="border border-2 rounded-3 my-3">
            <h1 class="text-center">Edit User</h1>
        </div>
        <div class="row py-3">
            <div class="col-8 offset-2 img-thumbnail">
                <div class="row">
                    <div class="col-8">
                        @include('includes.form_error')
                        <form action="{{route('users.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label class="text-black" for="name">Name:</label>
                                <input value="{{$user->name}}" type="text" name="name" id="title"
                                       class="form-control bg-black"
                                       placeholder="{{$user->name}}">
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="email">E-mail:</label>
                                <input value="{{$user->email}}" type="text" name="email" id="title"
                                       class="form-control bg-black"
                                       placeholder="{{$user->email}}">
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="role">Role: (CTRL + CLICK multiple select)</label>
                                <select name="roles[]" class="form-control custom-select bg-black" multiple>
                                    @foreach($roles as $role)
                                        <option value="{{$role->id}}"
                                                @if($user->roles->contains($role->id)) selected @endif>
                                            {{$role->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="is_active">Status:</label>
                                <select name="is_active" class="form-select bg-black text-white">
                                    <option value="1" >
                                        Active
                                    </option>
                                    <option value="0">
                                        Not Active
                                    </option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-black" for="email">Password:</label>
                                <input value="" type="password" name="password" id="password"
                                       class="form-control bg-black"
                                       placeholder="Password...">
                            </div>
                            <div class="form-group">
                                <label class="text-black me-3" for="file">Profile Photo:</label>
                                <div class="col-lg-12 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Your so fresh input file — Default version</h4>
                                            <input type="file" name="photo_id" class="dropify" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit User</button>
                        </form>
                    </div>
                    <div class="col-4">
                        <p class="text-black">Profile Photo:</p>
                        <img class="img-fluid img-thumbnail"
                             src="{{$user->photo ? asset('img/users') . $user->photo->file : 'https://via.placeholder.com/500'}}"
                             alt="{{$user->name}}">
                    </div>
                </div>

            </div>
        </div>
@endsection
