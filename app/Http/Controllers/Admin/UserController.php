<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        // $validated = $request->validate([
        //     'name' => ['required', 'min:3'],
        //     'email' => ['required', 'email'],
        // ]);

        dd($request);


        // $user = [
        //     'name' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'user_type' => '1',
        //     'phone' => '09023824525',
        //     'address' => 'Tabriz',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'), // password
        // ];

        // User::create($validated);
        // return to_route('admin.users.index');
    }
}
