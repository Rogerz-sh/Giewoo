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
    <!--[if lt IE 9]><script src="/scripts/html5shiv.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="/scripts/selectivizr.js"></script><![endif]-->
</head>
<body>
<div class="container-fluid">
    @yield('content')
</div>
<div class="footer">
    &copy;2015 上海即沃企业管理咨询有限公司 版权所有　　|　　<a href="http://www.miitbeian.gov.cn/" target="_blank">沪ICP备15055149号</a>
</div>
<script src="/scripts/jquery.min.js"></script>
<script>
    $(function () {
        var sh = document.documentElement.scrollHeight, ch = document.documentElement.clientHeight;
        if (sh > ch) {
            $('#main').css('margin-bottom', '10px');
            $('.footer').css('position', 'relative');
        }
    });
</script>
</body>
</html>