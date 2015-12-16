<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="_token" content="{{csrf_token()}}">
    <meta property="qc:admins" content="311237732767157776375" />
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/bootstrap.replace.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/site/home.css">
    <script src="/scripts/jquery.min.js"></script>
    <script src="/scripts/bootstrap.min.js"></script>
    <script src="/scripts/underscore.min.js"></script>
    <script src="/scripts/prototype.js"></script>
    <script src="/scripts/plugins/ajax.js"></script>
    <script src="/scripts/plugins/dialog.js"></script>
    <!--[if lt IE 9]><script src="/scripts/html5shiv.min.js"></script><![endif]-->
    <!--[if lte IE 8]><script src="/scripts/selectivizr.js"></script><![endif]-->
</head>
<body>
    <header class="header">
        <div class="wrap">
            <div class="logo" onclick="location.href='/'">
                <div class="flip-container">
                    <div class="flip-box flip-x">
                        <div class="flip face"><img src="/images/giewoo.png" height="100%" width="100%" /></div>
                        <div class="flip back"><div class="full-size bg-dark-orange"><img src="/images/logo_text.png" height="100%" width="100%" /></div></div>
                    </div>
                </div>

                {{--<img src="/images/logo_eye.png" height="110" />--}}
                {{--<div class="logo-text">即沃咨询 <small>Giewoo</small></div>--}}
            </div>
            <div class="quick-menu">
                <div class="text-left">
                    <img src="/images/wechat.png" alt="" height="25">
                    <img src="/images/tel.png" alt="" height="25">
                    <strong class="dark-orange">400-670-7725</strong>
                </div>
                <ul class="dark-gray">
                    <li><a class="dark-gray" href="javascript:;">我是企业</a>|</li>
                    <li><a class="dark-gray" href="javascript:;">我是人才</a>|</li>
                    <li><a class="dark-gray" href="/site/about">关于我们</a></li>
                </ul>
            </div>
        </div>
    </header>
    <nav>
        <div class="wrap">
            <ul>
                <li @if($navIndex == 0)class="active"@endif><a href="/">首页</a></li>
                <li @if($navIndex == 1)class="active"@endif><a href="/site/hunter">猎头服务</a></li>
                <li @if($navIndex == 2)class="active"@endif><a href="/site/train">极速猎车</a></li>
                <li @if($navIndex == 3)class="active"@endif><a href="/site/example">成功案例</a></li>
                <li @if($navIndex == 4)class="active"@endif><a href="/site/career">职业发展</a></li>
                <li @if($navIndex == 5)class="active"@endif><a href="/site/club">俱乐部</a></li>
                <li @if($navIndex == 6)class="active"@endif><a href="/site/join">加入我们</a></li>
            </ul>
        </div>
    </nav>
    @yield('content')
    <div id="side-tools">
        <ul>
            <li class="v-align side-tools-click"><div><i class="fa fa-comment fa-2x"></i><br>咨询</div></li>
            <li class="v-align side-tools-handler">
                <div><i class="fa fa-phone fa-2x"></i><br><span>热线</span></div>
                <div class="side-tools-hide width-160">
                    <div class="padding-10 text-center white line-height-10">
                        <span>24小时免费咨询热线</span>
                        <br><span class="font-120">400-670-7725</span>
                        <br><span>总机：021-61199398</span>
                    </div>
                </div>
            </li>
            <li class="v-align side-tools-top"><div><i class="fa fa-chevron-up fa-2x"></i></div></li>
        </ul>
    </div>
    <div class="dialog-container" id="easy_contact" style="display: none;">
        <div class="dialog-content width-400 bordered border-width-2 border-color-dark-orange">
            <div class="container-fluid">
                <div class="row"><p class="padding-10 text-center bg-dark-orange white"><span class="font-110">即沃</span>为您提供专业的猎头咨询服务 <i class="fa fa-times pull-right pointer" id="easy_contact_close"></i></p></div>
                <div class="row">
                    <div class="col-xs-12">
                        <p class="dark-gray"><i class="fa fa-info-circle dark-orange"></i> 请留下您的联系方式，我们将尽快与您联系!</p>
                        <p>
                            <input id="easy_name" type="text" class="width-90 form-control inline-block outline-color-dark-orange" maxlength="50" placeholder="姓名">
                            <label class="inline-block"><input type="radio" name="sex" class="dark-orange" checked value="先生"><span class="text dark-gray">先生</span></label>
                            <label class="inline-block"><input type="radio" name="sex" class="dark-orange" value="女士"><span class="text dark-gray">女士</span></label>
                            <input id="easy_tel" type="text" class="width-150 form-control inline-block outline-color-dark-orange" maxlength="20" placeholder="联系电话">
                        </p>
                        <p>
                            <label class="inline-block margin-left-5"><input type="radio" name="type" class="dark-orange" checked value="1"><span class="text dark-gray">我是企业</span></label>
                            <label class="inline-block margin-left-10"><input type="radio" name="type" class="dark-orange" value="0"><span class="text dark-gray">我是人才</span></label>
                            <a id="easy_contact_btn" class="btn btn-warning bg-dark-orange white width-120 margin-left-55"><i class="fa fa-check"></i> <span>提交</span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="loading">
        <div class="circle animation"></div>
        <div class="circle text"></div>
    </div>
    <script>
        $(function () {
            $('.side-tools-click').click(function () {
                $('#easy_contact').show();
            });

            $('#easy_contact_close').click(function () {
                $('#easy_contact').hide();
            });

            $('#easy_contact_btn').click(function () {
                var self = $(this), name = $('#easy_name').val(), tel = $('#easy_tel').val();
                if (_.isEmpty(name) || _.isEmpty(tel)) {
                    $.$modal.alert('联系人或联系电话不能为空');
                    return;
                }
                var sex = $('input[name="sex"]:checked', '#easy_contact').val(),
                        type = $('input[name="type"]:checked', '#easy_contact').val();
                var data = {name: name + ' ' + sex, tel: tel, type: ['人才', '企业'][type]};
                self.find('i').removeClass('fa-check').addClass('fa-spinner fa-spin');
                $.$ajax.post('/site/create-message', {message: data}, function (res) {
                    self.find('i').removeClass('fa-spinner fa-spin').addClass('fa-check green');
                    self.find('span').text('提交成功').end().removeClass('btn-warning bg-dark-orange white').addClass('green');
                    setTimeout(function () {
                        $('#easy_contact').hide();
                    },1000)
                });
            });
        });
    </script>
</body>
</html>
