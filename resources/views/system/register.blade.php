@extends('layout.normal')
@section('title', '用户登录')
@section('page-head')
    <link rel="stylesheet" href="/styles/user/login.css">
@stop
@section('content')
    <div class="wrap bg-white box-shadow padding-15 margin-bottom-100">
        <div class="row">
            <div class="col-xs-8" style="border-right: 1px solid #ddd;">
                <form action="/system/register" id="form" class="form form-horizontal" onsubmit="return false">
                    <blockquote>
                        <p>注册新管理员</p>
                    </blockquote>
                    <div class="form-group">
                        <label class="control-label col-xs-3">昵称：</label>
                        <div class="col-xs-9">
                            <input type="text" id="nickname" class="form-control" placeholder="请输入昵称">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">用户名：</label>
                        <div class="col-xs-9">
                            <input type="text" id="name" class="form-control" placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">登陆密码：</label>
                        <div class="col-xs-9">
                            <input type="password" id="password" class="form-control" placeholder="请输入6-20位密码，字母开头">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">确认密码：</label>
                        <div class="col-xs-9">
                            <input type="password" id="password2" class="form-control" placeholder="请再次输入密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-xs-9 col-xs-offset-3">
                            <input type="checkbox" name="readme" id="readme" />
                            <span class="text">我已阅读网站的
                            <a href="#">授权协议</a> 以及 <a href="#">隐私保护政策</a></span></label>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-9 col-xs-offset-3">
                            <button class="btn btn-primary size-mini" id="register">注册</button>
                            <button class="btn btn-default size-mini" id="backward">返回登录</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="pos-fix full-width bottom top-200 bg-main z-bottom"></div>
    <script src="/scripts/system/register.js"></script>
@stop