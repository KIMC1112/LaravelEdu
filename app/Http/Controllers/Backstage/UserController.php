<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        echo "hello world";
    }

    public function login()
    {
        return "welcome";
    }
}
