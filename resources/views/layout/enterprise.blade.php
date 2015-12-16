<?php
use Illuminate\Support\Facades\Session;
$name = Session::get('name');
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
    <!--[if lt IE 9]><script src="/scripts/html5shiv.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="/scripts/selectivizr.js"></script><![endif]-->
    @yield('page-head')
</head>
<body class="bg-background">
<div id="loading">
    <div class="circle animation"></div>
    <div class="circle text"></div>
</div>
<div class="wrapper">
    <div id="header" class="bg-white">
        <div class="wrap padding-left-10 padding-right-10">
            <div class="float-left orange"><h2 class="float-left"><i class="fa fa-home"></i> 上海饰也贸易有限公司</h2></div>
            <div class="float-right">
                <ul id="user-menu">
                    <li title="我的帐户"><i class="fa fa-user"></i></li>
                    <li title="我的消息"><i class="fa fa-envelope"></i></li>
                    <li title="我的钱包"><i class="fa fa-money"></i></li>
                    <li title="系统设置"><a class="white" href="/account/logout"><i class="fa fa-cog"></i></a></li>
                </ul>
                <div id="user">
                    <p class="orange bold">{{ $name }}</p>
                    <img src="/images/logo.jpg" alt="照片" />
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
