<?php

namespace App\Http\Controllers\Backstage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        //处理
        //验证
        //渲染
        return view('web/backstage/admin/index');
    }

    public function login()
    {
        return "welcome";
    }
}
