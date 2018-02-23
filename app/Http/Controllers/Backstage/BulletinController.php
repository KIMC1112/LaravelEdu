<?php

namespace App\Http\Controllers\Backstage;

use App\Backstage\Bulletin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BulletinController extends Controller
{
    public function index()
    {
        $bulletin = Bulletin::orderby('updated_at','desc')->paginate(5);
        return view('/web/backstage/bulletin/index',['bulletins'=>$bulletin]);
    }

    public function edit()
    {
        return view('/web/backstage/bulletin/edit');
    }

    public function store(Request $request)
    {
        $bulletinName = $request->get('bulletinName');
        $status = $request->get('status');
        $hot = $request->get('hot');
        $content = $request -> get('content');
        $id = $request->get('id');
        $file = $request->file('bulletinImage');
        if ($file->isValid()) {
            // 获取文件相关信息
            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            $type = $file->getClientMimeType();     // image/jpeg
            // 上传文件
            $bulletinUrl = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
            // 使用新建的uploads本地存储空间（目录）
            $bool = Storage::disk('uploads')->put($bulletinUrl, file_get_contents($realPath));
        }
        //dd($bulletinUrl);
        $bulletin = Bulletin::findOrNew($id);
        $bulletin ->bulletinName = $bulletinName;
        $bulletin ->status = $status;
        $bulletin ->hot = $hot;
        $bulletin ->content = $content;
        $bulletin ->bulletinUrl = "/uploads/".$bulletinUrl;
        $bulletin->save();
        return redirect('backstage/bulletin');
    }

    public function delete()
    {

    }
}
