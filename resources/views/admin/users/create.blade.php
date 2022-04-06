@extends('layouts.admin')
@section('content')
    <div class="col-12">
        <div class="border border-2 rounded-3 my-3">
            <h1 class="text-center">Create User</h1>
        </div>
        <div class="row py-3">
            <div class="col-8 offset-2 img-thumbnail">
                @include('includes.form_error')
                <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="text-black" for="name">Name:</label>
                        <input type="text" name="name" id="title"
                               class="form-control bg-black"
                               placeholder="Title..">
                    </div>
                    <div class="form-group">
                        <label class="text-black" for="email">E-mail:</label>
                        <input type="email" name="email" id="title"
                               class="form-control bg-black"
                               placeholder="E-mail..">
                    </div>
                    <div class="form-group">
                        <label class="text-black" for="role">Role: (CTRL + CLICK multiple select)</label>
                        <select name="roles[]" class="form-control custom-select bg-black" multiple>
                            @foreach($roles as $role)
                                <option value="{{$role->id}}">
                                    {{$role->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-black" for="is_active">Status:</label>
                        <select name="is_active" class="form-select bg-black text-white">
                            <option value="1">
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
                                    <h4 class="card-title">Your Profile Picture</h4>
                                    <input type="file" name="photo_id" class="dropify" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Create User</button>
                </form>
            </div>
        </div>
@endsection
