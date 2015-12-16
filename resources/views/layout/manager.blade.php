<?php
use Illuminate\Support\Facades\Session;
$name = Session::get('name');
$nickname = Session::get('nickname');
$navData = Session::get('navData');
$menus = $navData['menus'];
$submenus = $navData['submenus'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="_token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/bootstrap.replace.css">
    <link rel="stylesheet" href="/styles/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/kendo.common-bootstrap.min.css">
    <link rel="stylesheet" href="/styles/kendo.bootstrap.min.css">
    <link rel="stylesheet" href="/styles/kendo.dataviz.min.css">
    <link rel="stylesheet" href="/styles/kendo.dataviz.bootstrap.min.css">
    <link rel="stylesheet" href="/styles/kendo.replace.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/main.css">
    <script src="/scripts/jquery.min.js"></script>
    <script src="/scripts/jquery.cookie.js"></script>
    <script src="/scripts/underscore.min.js"></script>
    <script src="/scripts/bootstrap.min.js"></script>
    <script src="/scripts/kendo.all.min.js"></script>
    <script src="/scripts/kendo.culture.zh-CN.min.js"></script>
    <script src="/scripts/kendo.messages.zh-CN.min.js"></script>
    <script src="/scripts/prototype.js"></script>
    <script src="/scripts/plugins/ajax.js"></script>
    <script src="/scripts/plugins/dialog.js"></script>

    <!--[if lt IE 9]><script src="/scripts/html5shiv.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="/scripts/selectivizr.js"></script><![endif]-->
    @yield('page-head')
</head>
<body class="bg-background">
<div class="wrapper">
    <div id="header" class="bg-white">
        <div class="wrap padding-left-10 padding-right-10">
            <div class="float-left orange"><h2 class="float-left"><i class="fa fa-cog"></i> 即沃 锐驰后台管理系统V1.0</h2></div>
            <div class="float-right">
                <div id="user">
                    <p class="orange bold">欢迎您！ </p>
                    <p class="orange bold">{{ $nickname }}</p>
                    <p><a href="/system/logout" class="btn btn-default btn-sm bg-orange white">退出系统</a></p>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div id="nav">
        <div class="wrap">
            <ul class="nav-list">
                @foreach($menus as $menu)
                    <li>
                        @if(count($submenus[$menu->id]) > 0)
                            <a>{{$menu->label}} <span class="caret"></span></a>
                            <ul class="sub-nav">
                            @foreach($submenus[$menu->id] as $sub)
                                <li><a href="{{$sub->url}}">{{$sub->label}}</a></li>
                            @endforeach
                            </ul>
                        @else
                            <a href="{{$menu->url}}">{{$menu->label}}</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    @yield('content')
</div>
<div id="loading">
    <div class="circle animation"></div>
    <div class="circle text"></div>
</div>
<script src="/scripts/main.js"></script>
@yield('body-script')
<script>
    $(function () {
        var navIndex = {{$navIndex}};
        $('.nav-list>li').eq(navIndex).addClass('active');
    });
</script>
</body>
</html>
