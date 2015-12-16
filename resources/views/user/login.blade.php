@extends('layout.normal')
@section('title', '用户登录')
@section('page-head')
    <link rel="stylesheet" href="/styles/user/login.css">
    <style>
        .wrap+div {
            top: 250px;
        }
    </style>
@stop
@section('content')
    <div class="wrap pos-rel full-height">
        <h1 class="pos-abs margin-top-100"><span class="orange">即沃</span> <small>您身边的招聘专家</small></h1>
        <div class="content bg-white">
            <div class="login-box">
                <div class="tab-group">
                    <div class="tabs">
                        <div class="tab size-md" data-target="quick-login">快速登录</div>
                        <div class="tab size-md active" data-target="login">帐户密码登录</div>
                    </div>
                    <div class="tab-content text-center" id="quick-login">
                        <img src="/images/temp/code.jpg" class="margin-top-20" width="120" alt="">
                        <p>手机扫码 安全登录</p>
                        <p class="font-sm">使用 <span class="text-danger">微信</span> 扫一扫功能扫描二维码</p>
                    </div>
                    <div class="tab-content active" id="login">
                        <div class="col-xs-12">
                            <form id="form" class="form form-horizontal" action="/account/login" onsubmit="return false">
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" id="name" class="form-control" placeholder="请输入您的帐号" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" id="password" class="form-control" placeholder="请输入您的密码" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <span class="font-sm"><a href="/user/forget">忘记密码？</a></span>
                                    <span class="font-sm float-right"><a href="/user/register">快速注册</a></span>
                                </div>
                                <div class="form-group">
                                    <button class="btn col-xs-12 bg-orange white" id="submit">登录</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pos-abs full-width bottom top-200 bg-orange z-bottom"></div>
    <script src="/scripts/user/login.js"></script>
@stop