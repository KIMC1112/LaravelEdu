<?php

namespace App\Http\Controllers\Backstage;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class IndexController extends Controller
{
    public function index()
    {
        if (session('username')) {
            return Redirect::to('backstage/user/index');
        } else {
            return view('web/backstage/login');
        }
    }

    public function login(Request $request)
    {
        $username = trim($request->input('username'));
        $password = trim($request->input('password'));
        $user = new User();
        $res = $user->where('name', $username)->first();
        $resUsername = $res->name;
        $resPassword = $res->password;
        if ($username === $resUsername && $password === $resPassword) {
            $request->session()->put('username', $username);
            $data = $request->session()->all();
            return Redirect::to('backstage/user/index');
        } else {
            return false;
        }
    }


}
