<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('admin.users.index', compact('data'));
    }

    public function create()
    {
        $roles = Role::pluck('name','id')->all();
        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->name         = $request->name;
        $user->email        = $request->email;
        $user->role_id   = $request->role_id;
        $user->password  = Hash::make($request->password);
        $user->save();

        return redirect()->route('users.index');
    }
}
