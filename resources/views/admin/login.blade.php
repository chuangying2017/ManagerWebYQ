<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('hui-admin/lib/html5shiv.js')}}"></script>
    <script type="text/javascript" src="{{asset('hui-admin/lib/respond.min.js')}}"></script>
    <![endif]-->
    <link href="{{asset('hui-admin/static/h-ui/css/H-ui.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('hui-admin/static/h-ui.admin/css/H-ui.login.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('hui-admin/static/h-ui.admin/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('hui-admin/lib/Hui-iconfont/1.0.8/iconfont.css')}}" rel="stylesheet" type="text/css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="{{asset('hui-admin/lib/DD_belatedPNG_0.0.8a-min.js')}}" ></script>

    <![endif]-->
    <title>后台登录</title>
    <meta name="keywords" content="H-ui.admin v3.1,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
    <meta name="description" content="H-ui.admin v3.1，是一款由国人开发的轻量级扁平化网站后台模板，完全免费开源的网站后台管理系统模版，适合中小型CMS后台系统。">
</head>
<body>
<input type="hidden" id="TenantId" name="TenantId" value="" />
<div class="header"></div>
<div class="loginWraper">
    <div id="loginform" class="loginBox">
        <form class="form form-horizontal" method="post">
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60d;</i></label>
                <div class="formControls col-xs-8">
                    <input  name="username" type="text" placeholder="账户" datatype="m" errormsg="请输入您的手机号码！" class="input-text size-L">
                </div>
                <div class="Validform_checktip"></div>
                @if($errors->has('username'))
                    <div>{{$errors->first('username')}}</div>
                @endif
            </div>
            <div class="row cl">
                <label class="form-label col-xs-3"><i class="Hui-iconfont">&#xe60e;</i></label>
                <div class="formControls col-xs-8">
                    <input  name="password" type="password" placeholder="密码" datatype="*6-15" errormsg="密码范围在6~15位之间！" class="input-text size-L">
                </div>
                <div class="Validform_checktip"></div>
              @if($errors->has('password'))
                  <div>{{$errors->first('password')}}</div>
                @endif
            </div>
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input class="input-text size-L" name="captcha" type="text" placeholder="验证码" onblur="if(this.value==''){this.value='验证码:'}" onclick="if(this.value=='验证码:'){this.value='';}"  style="width:150px;">
                    <img src="{{captcha_src()}}" id="captcha-click" style="cursor: pointer"> <a id="kanbuq" href="javascript:;">看不清，换一张</a> </div>

            </div>
                <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <label for="online">
                        <input type="checkbox" name="online" id="online" value="">
                        使我保持登录状态</label>
                    @if($errors->has('captcha'))
                        &nbsp;&nbsp;<label style="color: red" for="online">
                            {{$errors->first('captcha')}}
                        </label>
                    @endif
                </div>
            </div>
            {{csrf_field()}}
            <div class="row cl">
                <div class="formControls col-xs-8 col-xs-offset-3">
                    <input name="" type="submit" class="btn btn-success radius size-L" value="&nbsp;登&nbsp;&nbsp;&nbsp;&nbsp;录&nbsp;">
                    <input name="" type="reset" class="btn btn-default radius size-L" value="&nbsp;重&nbsp;&nbsp;&nbsp;&nbsp;置&nbsp;">
                </div>
            </div>
        </form>
    </div>
</div>
<div class="footer">Copyright my company by cdn</div>
<script type="text/javascript" src="{{asset('hui-admin/lib/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('hui-admin/lib/Validform/Validform_v5.3.2.js')}}"></script>
<script>
 $(function () {
     $('#kanbuq').click(function(){
         $('#captcha-click')[0].src='{{captcha_src()}}'+Math.random()
     });

     $('.form').Validform();
 })

</script>

</body>
</html>