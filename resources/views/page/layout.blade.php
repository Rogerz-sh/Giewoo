<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="{{csrf_token()}}">
    <meta property="qc:admins" content="311237732767157776375" />
    <meta name="keywords" content="即沃，人才咨询，人才服务，人才甄选，背景调查">
    <meta name="description" content="即沃，中国领先的人才咨询服务机构。目前公司拥有100余名专业顾问，合作的客户主要有在华的500强公司、国有和民营企业、境内外上市公司等，服务行业覆盖50多个细分领域，客户满意率91%以上。">
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/bootstrap.replace.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/new-page/css/page.css">
    <link rel="stylesheet" href="/new-page/css/sitemap.css"/>
    <!--[if lt IE 9]><script src="/scripts/html5shiv.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="/scripts/selectivizr.js"></script><![endif]-->
</head>
<body>
<div class="container-fluid">
    @yield('content')
</div>
<!--网站导航地图-->
<div id="sitemap">
    <div class="flex-row">
        <div class="flex-tr one">
            <ul>
                <li class="head title">网站地图</li>
            </ul>
        </div>
        <div class="flex-tr one">
            <ul>
                <li class="head">网站首页</li>
                <li><a href="/#us">我们</a></li>
                <li><a href="/#server">服务</a></li>
                <li><a href="/#job">职位</a></li>
                <li><a href="/#article">资讯</a></li>
                <li><a href="/#team">团队</a></li>
            </ul>
        </div>
        <div class="flex-tr one">
            <ul>
                <li class="head">文章资讯</li>
                <li><a href="/research">即沃研究院</a></li>
                <li><a href="/dynamic">职场动态</a></li>
            </ul>
        </div>
        <div class="flex-tr two">
            <ul>
                <li class="head">行业职位</li>
                <li><a href="/jobs/1">IT/互联网</a></li>
                <li><a href="/jobs/2">金融</a></li>
                <li><a href="/jobs/7">化工/环保/能源</a></li>
                <li><a href="/jobs/10">通信/电子/信息</a></li>
                <li><a href="/jobs/3">房产/建筑/建材</a></li>
                <li><a href="/jobs/4">汽车/机械/制造</a></li>
                <li><a href="/jobs/6">消费品</a></li>
                <li><a href="/jobs/8">广告/传媒/教育</a></li>
                <li><a href="/jobs/9">交通/贸易/物流</a></li>
                <li><a href="/jobs/5">文化/旅游/健康</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="footer">
    &copy;2015 上海即沃企业管理咨询有限公司 版权所有　　|　　沪ICP备15055149号
</div>
@if(!Config::get('app.debug'))
<script>
    (function(){
        var bp = document.createElement('script');
        var curProtocol = window.location.protocol.split(':')[0];
        if (curProtocol === 'https'){
            bp.src = "https://zz.bdstatic.com/linksubmit/push.js";
        }
        else{
            bp.src = "http://push.zhanzhang.baidu.com/push.js";
        }
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(bp, s);
    })();
</script>
@endif
<script src="/scripts/jquery.min.js"></script>
<script>
    $(function () {
        var sh = document.documentElement.scrollHeight, ch = document.documentElement.clientHeight;
        if (sh > ch) {
            $('#main').css('margin-bottom', '10px');
            $('.footer').css({'position': 'relative'});
        }
    });
</script>
</body>
</html>