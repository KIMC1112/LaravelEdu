@extends('web.backstage.dashboard')
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                    <h3 class="box-title">轮播图</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
                <form role="form" action="{{route('backstage.bulletin.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">新闻标题</label>
                            <div class="col-sm-10">
                                <input type="text" name="bulletinName" class="form-control" value="" id="inputEmail3" placeholder="请输入轮播图名称">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">是否展示</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="status" id="optionsRadios1" value="1" >是
                            </label>
                            <label>
                                <input type="radio" name="status" id="optionsRadios1" value="0" >否
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">是否热帖</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="hot" id="optionsRadios1" value="1" >是
                            </label>
                            <label>
                                <input type="radio" name="hot" id="optionsRadios1" value="0" >否
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">新闻内容</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" rows="3" name="content" placeholder="Enter ..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">上传图片</label>
                            <div class="external-event bg-red">400*184px</div>
                            <input type="file" name="bulletinImage" id="exampleInputFile">
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
        </div>
    </div>
@endsection