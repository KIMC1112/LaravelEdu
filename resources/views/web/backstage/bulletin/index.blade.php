@extends('web.backstage.dashboard')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <a href="{{route('backstage.bulletin.edit')}}"><button type="button" class="btn btn-info">新增</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>新闻标题</th>
                            <th>发布时间</th>
                            <th>是否热帖</th>
                            <th>是否显示</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bulletins as $bulletin)
                        <tr>
                            <td>{{$bulletin->id}}</td>
                            <td>{{$bulletin->bulletinName}}</td>
                            <td>{{$bulletin->created_at}}</td>
                            <td>{{$bulletin->hot==1?'是':'否'}}</td>
                            <td>{{$bulletin->status==1?'是':'否'}}</td>
                            <td></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
@endsection