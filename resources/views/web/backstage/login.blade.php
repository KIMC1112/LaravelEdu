<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录界面</title>
    <link href="{{asset('css/default.css')}}" rel="stylesheet" type="text/css"/>
    <!--必要样式-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/demo.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/loaders.css')}}" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/stopExecutionOnTimeout.js?t=1')}}"></script>
    <script type="text/javascript" src="{{asset('layui/layui.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/Particleground.js')}}"></script>
    <script type="text/javascript" src="{{asset('Js/Treatment.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery.mockjax.js')}}"></script>
    <link href="{{asset('layui/css/layui.css')}}" rel="stylesheet" type="text/css"/>

</head>
<body>
<div class='login'>
    <div class='login_title'>
        <span>管理员登录</span>
    </div>
    <form action="{{route('backstage.index.login')}}" id="form" method="post">
        {{ csrf_field() }}
    <div class='login_fields'>
        <div class='login_fields__user'>
            <div class='icon'>
                <img alt="" src="{{asset('images/user_icon_copy.png')}}">
            </div>
            <input name="username" placeholder='用户名' maxlength="16" id="username" type='text' autocomplete="off"/>
            <div class='validation'>
                <img alt="" src="{{asset('images/tick.png')}}">
            </div>
        </div>
        <div class='login_fields__password'>
            <div class='icon'>
                <img alt="" src="{{asset('images/lock_icon_copy.png')}}">
            </div>
            <input name="password" placeholder='密码' maxlength="16" type='text' id="password" autocomplete="off">
            <div class='validation'>
                <img alt="" src="{{asset('images/tick.png')}}">
            </div>
        </div>
        <div class='login_fields__password'>
            <div class='icon'>
                <img alt="" src="{{asset('images/key.png')}}">
            </div>
            <input name="code" placeholder='验证码' maxlength="4" type='text' id="validate" autocomplete="off">
            <div class='validation' style="opacity: 1; right: -5px;top: -3px;">

            </div>
        </div>
        <div class='login_fields__submit'>
            <input type='submit' id="button-sub" value='登录'>
        </div>
    </div>
    </form>
    <div class='success'>
    </div>
</div>
<div class='authent'>
    <div class="loader" style="height: 44px;width: 44px;margin-left: 28px;">
        <div class="loader-inner ball-clip-rotate-multiple">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <p>认证中...</p>
</div>
<div class="OverWindows"></div>

<script>
    $('#button-sub').click(function () {
        alert('登录成功');
    })

</script>


</body>
</html>
