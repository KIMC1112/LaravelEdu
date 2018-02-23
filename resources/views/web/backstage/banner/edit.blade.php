@extends('web.backstage.dashboard')
@section('content')
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
                @if($category ==1)
                    <h3 class="box-title">轮播图</h3>
                @else
                    <h3 class="box-title">教师图</h3>
                @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @if($banner)
            <form role="form" action="{{route('backstage.banner.store')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <div>
                            <input type="hidden" name="category" value="{{$category}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">轮播图名称</label>
                        <div class="col-sm-10">
                            <input type="text" name="banner_name" class="form-control" value="{{$banner->bannerName}}" id="inputEmail3" placeholder="请输入轮播图名称">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">排序值</label>
                        <div class="col-sm-10">
                            <input type="text" name="banner_sort" class="form-control" value="{{$banner->bannerSort}}" id="inputEmail3" placeholder="排序值越小在前">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">是否展示</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                            <input type="radio" name="status" id="optionsRadios1" value="1" @if($banner->status ==1) checked="checked" @endif>是
                        </label>
                        <label>
                            <input type="radio" name="status" id="optionsRadios1" value="0" @if($banner->status ==0) checked="checked" @endif>否
                        </label>
                    </div>
                    @if($banner->bannerUrl)
                        <div>
                            <img src="{{$banner->bannerUrl}}" style="width: 300px;height: 100px" alt="">
                        </div>
                        <p>需重新上传图片</p>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputFile">上传轮播图</label>
                        <div class="external-event bg-red">1200*450</div>
                        <input type="file" name="banner_image" id="exampleInputFile">

                        <p class="help-block">Example block-level help text here.</p>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            @else
                @if($category == 1)
                <form role="form" action="{{route('backstage.banner.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="form-group">
                        <div>
                            <input type="hidden" name="category" value="{{$category}}">
                        </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">轮播图名称</label>
                            <div class="col-sm-10">
                                <input type="text" name="banner_name" class="form-control" value="" id="inputEmail3" placeholder="请输入轮播图名称">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">排序值</label>
                            <div class="col-sm-10">
                                <input type="text" name="banner_sort" class="form-control" value="" id="inputEmail3" placeholder="排序值越小在前">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">是否展示</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="status" id="optionsRadios1" value="1"  checked="checked">是
                            </label>
                            <label>
                                <input type="radio" name="status" id="optionsRadios1" value="0" >否
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">上传轮播图</label>
                            <div class="external-event bg-red">1200*450</div>
                            <input type="file" name="banner_image" id="exampleInputFile">

                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                @endif
                @if($category == 0)
                        <form role="form" action="{{route('backstage.banner.store')}}" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div>
                                        <input type="hidden" name="category" value="{{$category}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">教师名称</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="banner_name" class="form-control" value="" id="inputEmail3" placeholder="请输入轮播图名称">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">排序值</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="banner_sort" class="form-control" value="" id="inputEmail3" placeholder="排序值越小在前">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">是否展示</label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label>
                                        <input type="radio" name="status" id="optionsRadios1" value="1"  checked="checked">是
                                    </label>
                                    <label>
                                        <input type="radio" name="status" id="optionsRadios1" value="0" >否
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">教师介绍</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" rows="3" name="content" placeholder="Enter ..."></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">上传轮播图</label>
                                    <div class="external-event bg-red">1200*450</div>
                                    <input type="file" name="banner_image" id="exampleInputFile">

                                    <p class="help-block">Example block-level help text here.</p>
                                </div>

                            </div>
                            <!-- /.box-body -->

                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                @endif
            @endif
        </div>
        <!-- /.box -->



    </div>
@endsection