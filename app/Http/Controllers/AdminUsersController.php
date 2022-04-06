<?php

namespace App\Http\Controllers;

use App\Events\UsersSoftDelete;
use App\Http\Requests\UsersEditRequest;
use App\Http\Requests\UsersRequest;
use App\Models\Photo;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminUsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        $users = User::with('photo','roles')->withTrashed()->orderBy('updated_at', 'desc')->filter(request(['search']))->paginate(20);

        return view('admin.users.index', compact('users', 'mainUser'));
    }

    public function create()
    {
        $roles = Role::all();
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        return view('admin.users.create', compact('roles','mainUser'));
    }

    public function store(UsersRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request['password']);
        $user->is_active = $request->is_active;

        /** photo opslaan **/
        if ($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('img/users', $name);
            $photo = Photo::create(['file' => $name]);
            $user->photo_id = $photo->id;
        }
        $user->save();

        $user->roles()->sync($request->roles, false);
        Session::flash('user_message','User ' . $request->name . ' was created!');
        return redirect('admin/users');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        return view('admin.users.show', compact('user','mainUser'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        $id = Auth::user()->id;
        $mainUser = User::findOrFail($id);
        return view('admin.users.edit', compact('user', 'roles','mainUser'));
    }

    public function update(UsersEditRequest $request, $id)
    {
        $user = User::findOrFail($id);
        if (trim($request->password) == '') {
            $input = $request->except('password');
        } else {
            $input = $request->all;
            $input['password'] = Hash::make($request['password']);
        }
        /** opvragen oude image **/
        $oldImage = Photo::find($user->photo_id);
        if($oldImage){
            //fysisch verwijderen uit img directory
            unlink(public_path() . '/img/users' . $oldImage->file);
            //oude image uit de tabel photos verwijderen
            $oldImage->delete();
        }
        /** photo overschrijven **/
        if ($file = $request->file('photo_id')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('img/users', $name);
            $photo = Photo::create(['file' => $name]);
            $user->photo_id = $input['photo_id'] = $photo->id;
        }
        $user->update($input);

        /** Wegschrijven tussentabel met de nieuwe rollen **/
        $user->roles()->sync($request->roles, true);
        Session::flash('user_message','User ' . $request->name . ' was updated!');
        return redirect('admin/users');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        UsersSoftDelete::dispatch($user);
        $user->delete();
        Session::flash('user_message', $user->name . ' was deleted!');
        return redirect('/admin/users');
    }

    public function restore($id)
    {
        User::onlyTrashed()->where('id', $id)->restore();
        $user = User::findOrFail($id);
        Session::flash('user_message', $user->name . ' was restored!');
        return redirect('/admin/users');
    }
}
