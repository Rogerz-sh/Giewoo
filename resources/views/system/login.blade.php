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
        <h1 class="pos-abs margin-top-100">即沃 <small>后台管理系统 V1.0</small></h1>
        <div class="content bg-white">
            <div class="login-box">
                <div class="tab-group">
                    <div class="tabs">
                        <div class="tab size-md active" data-target="login">帐户密码登录</div>
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
                                    <span class="font-sm float-right"><a href="/system/register">快速注册</a></span>
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
    <script src="/scripts/system/login.js"></script>
@stop