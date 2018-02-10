<?php

namespace App\Http\Controllers\Backstage;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        if (!$_SESSION['username']) {
            return Redirect::to('login');
        }
    }

    public function login()
    {
        if (!$_POST) {
            return view('/web/backstage/login');
        } else {
            echo "welcome login";

        }


    }
    
}
