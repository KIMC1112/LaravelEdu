@extends('web.backstage.dashboard')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{route('backstage.banner.edit',['category'=>'1'])}}"><button type="button" class="btn btn-info">新增轮播图</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th>名称</th>
                            <th>首页轮播图</th>
                            <th>排序值</th>
                            <th>更新时间</th>
                            <th>状态</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($datas as $data)
                            @if($data->category == 1)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->bannerName}}</td>
                            <td><img src="{{$data->bannerUrl}}" style="width: 300px;height: 100px" alt="">
                            </td>
                            <td>{{$data->bannerSort}}</td>
                            <td>{{$data->updated_at}}</td>
                            <td>{{$data->status==1?'是':'否'}}</td>
                            <td>
                                <a href="{{route('backstage.banner.edit',['id'=>$data->id])}}" class="btn btn-sm btn-primary">修改</a>
                                <a href="{{route('backstage.banner.delete',['id' => $data->id])}}" class="btn btn-danger">删除</a>
                        </tr>
                            @endif
                        @endforeach
                    </table>
                    {{$datas -> links()}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
@endsection