<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta name="_token" content="{{csrf_token()}}">
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/bootstrap.replace.css">
    <link rel="stylesheet" href="/styles/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/main.css">
    <script src="/scripts/jquery.min.js"></script>
    <script src="/scripts/jquery.cookie.js"></script>
    <script src="/scripts/bootstrap.min.js"></script>
    <script src="/scripts/underscore.min.js"></script>
    <script src="/scripts/prototype.js"></script>
    <script src="/scripts/plugins/ajax.js"></script>
    <script src="/scripts/plugins/form.js"></script>
    <script src="/scripts/plugins/dialog.js"></script>
    <!--[if lt IE 9]><script src="/scripts/html5shiv.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="/scripts/selectivizr.js"></script><![endif]-->
    @yield('page-head')
</head>
<body class="bg-background">
<div id="loading">
    <div class="circle animation"></div>
    <div class="circle text"></div>
</div>
@yield('content')
</body>
</html>
