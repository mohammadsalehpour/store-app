<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function redirect()
    {
        $user = Auth::user();
        // dd($user);
        // dd($user->user_type);

        if ($user->user_type == 1) {
            return view('admin.index');
        } else {
            return redirect('/');
        }
    }
}
