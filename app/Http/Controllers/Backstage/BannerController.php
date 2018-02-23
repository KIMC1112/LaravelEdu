<?php

namespace App\Http\Controllers\Backstage;

use App\banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Qcloud\Cos\Client;

class BannerController extends Controller
{
    public function index()
    {
        $data = Banner::orderby('updated_at','desc')->paginate(5);
        return view('web/backstage/banner/index',['datas'=>$data]);
    }

    public function edit(Request $request)
    {
        if($request->get('id'))
        {
            $category = $request->get('category');
            $id = $request->get('id');
            $banner = Banner::find($id);
            return view('/web/backstage/banner/edit',['banner'=>$banner,'category'=>$category]);
        }else {
            $category = $request->get('category');
            return view('/web/backstage/banner/edit',['banner'=>'','category'=>$category]);
        }
    }

    public function store(Request $request)
    {
        $bannerName = $request->get('banner_name');
        $bannerSort = $request->get('banner_sort');
        $status = $request->get('status');
        $content = $request -> get('content');
        if($request->get('category')== 1)
        {
            $category = 1;   //1是banner
        }else
            {
            $category = 0;   //0是teacher
        }
        $id = $request->get('id');
        $file = $request->file('banner_image');
        if ($file->isValid()) {
            // 获取文件相关信息
            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            $type = $file->getClientMimeType();     // image/jpeg
            // 上传文件
            $bannerUrl = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
            // 使用新建的uploads本地存储空间（目录）
            $bool = Storage::disk('uploads')->put($bannerUrl, file_get_contents($realPath));
        }
        $banner = Banner::findOrNew($id);
        $banner ->bannerName = $bannerName;
        $banner ->bannerSort = $bannerSort;
        $banner ->status = $status;
        $banner ->category = $category;
        $banner ->content = $content;
        $banner ->bannerUrl = "/uploads/".$bannerUrl;
        $banner->save();
        return redirect('backstage/banner/index');
    }

    public function delete()
    {
        echo 1;
    }

    /*
     * 主页老师设置方法
     */
    public function teacher()
    {
        $data = Banner::orderby('updated_at','desc')->paginate(5);
        return view('web/backstage/teacher/index',['datas'=>$data]);
    }

}