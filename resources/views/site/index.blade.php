@extends('layout.header')
@section('title', '即沃咨询 - 首页')
@section('content')
<div class="slider" style="top:-50px;margin-bottom: -50px;">
    <div class="wrapper">
        <ul class="slider-main">
            <li class="active text-center"><div style="width:100%;height:400px;background:url('/images/top/index_01.png') no-repeat center;"></div></li>
            <li><div style="width:100%;height:400px;background:url('/images/top/index2.png') no-repeat center;"></div></li>
            <li><div style="width:100%;height:400px;background:url('/images/top/index_03.jpg') no-repeat center;"></div></li>
        </ul>
    </div>
    <div class="slider-btn">
        <div class="wrapper">
            <a class="active"></a>
            <a></a>
            <a></a>
        </div>
    </div>
</div>
<div class="absolute-toolkit hide">
    <div class="absolute-right">
        <img src="/images/temp/code.jpg" alt="">
        <div class="toolkit-button bg-primary">企业快速下单</div>
        <div class="toolkit-button bg-primary">简历快速提交</div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="wrap" id="data-container">
            <div id="data-list">
                <div class="slide-list">
                    <div class="arrow arrow-left v-align text-center" data-direct="-1"><div><i class="fa fa-chevron-left fa-3x"></i></div></div>
                    <div class="slide-content">
                        <div>
                            <ul>
                                <?php $index = 0 ?>
                                @foreach($updateList as $data)
                                <li class="padding-left-10 padding-right-10">
                                    <h4 class="no-margin-bottom">{{$data->job_name}}<small> - {{$data->work_area}}</small>   <small class="orange pull-right bold">年薪{{$data->salary}}万</small></h4>
                                    <p class="dark-gray"><span>{{$data->company_name}}</span><span class="pull-right"><b>{{date('Y-m-d', strtotime($data->publish))}}</b></span></p>
                                </li>
                                <?php $index += 1 ?>
                                    @if($index % 4 == 0)</ul><ul>@endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="slide-light">
                        <span class="active"></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="arrow arrow-right v-align text-center" data-direct="1"><div><i class="fa fa-chevron-right fa-3x"></i></div></div>
                </div>
            </div>
            <div id="data-update">
                <div>
                    <p>成功服务数据</p>
                    <p><small>Successful Data</small></p>
                </div>
                
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="row margin-top-10">
        <div class="wrap">
            <div class="col-xs-12">
                <h4>服务领域 <br><small>Services Area</small></h4>
            </div>
        </div>
    </div>
    <div class="row bg-smoke" id="area_job_list">
        <div class="wrap  padding-top-20 padding-bottom-20">
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/internet.png" alt="" class="inline-block v-bottom" width="24" height="24">
                    <span>IT & 互联网</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/area/internet.png" class="border-solid border-width-1 border-color-gray" alt="" width="100%" height="150">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10 height-160" data-type="1">
                    @foreach($jobList as $job)
                        @if($job->type == 1)<li class="padding-top-5 padding-bottom-5"><a class="black">{{$job->job_name}}</a> <span class="pull-right orange">{{$job->salary}}</span><br> <small class="dark-gray">{{$job->company_name}}</small></li>@endif
                    @endforeach
                </ul>
            </div>
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/money.png" alt="" class="inline-block v-bottom" width="24" height="24">
                    <span>金融</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/area/money.png" alt="" width="100%" height="150">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10 height-160" data-type="2">
                    @foreach($jobList as $job)
                        @if($job->type == 2)<li class="padding-top-5 padding-bottom-5"><a class="black">{{$job->job_name}}</a> <span class="pull-right orange">{{$job->salary}}</span><br> <small class="dark-gray">{{$job->company_name}}</small></li>@endif
                    @endforeach
                </ul>
            </div>
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/house.png" alt="" class="inline-block v-bottom" width="24" height="24">
                    <span>房地产</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/area/house.png" alt="" width="100%" height="150">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10 height-160" data-type="3">
                    @foreach($jobList as $job)
                        @if($job->type == 3)<li class="padding-top-5 padding-bottom-5"><a class="black">{{$job->job_name}}</a> <span class="pull-right orange">{{$job->salary}}</span><br> <small class="dark-gray">{{$job->company_name}}</small></li>@endif
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="wrap  padding-bottom-20">
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/machine.png" alt="" class="inline-block v-bottom" width="24" height="24">
                    <span>机械制造</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/area/machine.png" alt="" width="100%" height="150">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10 height-160" data-type="4">
                    @foreach($jobList as $job)
                        @if($job->type == 4)<li class="padding-top-5 padding-bottom-5"><a class="black">{{$job->job_name}}</a> <span class="pull-right orange">{{$job->salary}}</span><br> <small class="dark-gray">{{$job->company_name}}</small></li>@endif
                    @endforeach
                </ul>
            </div>
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/sun.png" alt="" class="inline-block v-bottom" width="24" height="24">
                    <span>文化 健康 旅游</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/area/old.png" alt="" width="100%" height="150">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10 height-160" data-type="5">
                    @foreach($jobList as $job)
                        @if($job->type == 5)<li class="padding-top-5 padding-bottom-5"><a class="black">{{$job->job_name}}</a> <span class="pull-right orange">{{$job->salary}}</span><br> <small class="dark-gray">{{$job->company_name}}</small></li>@endif
                    @endforeach
                </ul>
            </div>
            <div class="col-xs-4">
                <div class="text-center bg-white padding-10">
                    <img src="/images/cart.png" alt="" class="inline-block v-bottom" width="24" height="24">
                    <span>消费品</span>
                </div>
                <div class="padding-5 bg-white">
                    <img src="/images/area/cart.jpg" alt="" width="100%" height="150">
                </div>
                <ul class="no-style bg-white padding-5 padding-left-10 padding-right-10 height-160" data-type="6">
                    @foreach($jobList as $job)
                        @if($job->type == 6)<li class="padding-top-5 padding-bottom-5"><a class="black">{{$job->job_name}}</a> <span class="pull-right orange">{{$job->salary}}</span><br> <small class="dark-gray">{{$job->company_name}}</small></li>@endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="wrap margin-bottom-20">
            <div class="col-xs-12" id="news">
                <h4 class="bg-white padding-top-10 padding-bottom-10">即沃视界 News</h4>
                <ul class="no-style" id="news-title">
                    <li class="active padding-10 inline-block" data-target="0">即沃学堂</li>
                    <li class="padding-10 inline-block" data-target="1">HR资讯</li>
                    <li class="padding-10 inline-block" data-target="2">职场动态</li>
                </ul>
                <div class="margin-top-20" id="news-content">
                    <div class="active">
                        <img src="/images/article/hunter.jpg" class="pos-abs" alt="" width="200" height="120">
                        <ul data-type="1">
                            @foreach($artList as $art)
                                @if($art->type == 1)<li><a href="/site/article/{{$art->id}}">{{$art->title}}</a> <span class="pull-right dark-gray">{{date('Y-m-d', strtotime($art->publish))}}</span></li>@endif
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <img src="/images/article/hr.png" class="pos-abs" alt="" width="200" height="120">
                        <ul data-type="2">
                            @foreach($artList as $art)
                                @if($art->type == 2)<li><a href="/site/article/{{$art->id}}">{{$art->title}}</a> <span class="pull-right dark-gray">{{date('Y-m-d', strtotime($art->publish))}}</span></li>@endif
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <img src="/images/article/career.png" class="pos-abs" alt="" width="200" height="120">
                        <ul data-type="3">
                            @foreach($artList as $art)
                                @if($art->type == 3)<li><a href="/site/article/{{$art->id}}">{{$art->title}}</a> <span class="pull-right dark-gray">{{date('Y-m-d', strtotime($art->publish))}}</span></li>@endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12" id="career" style="display: none;">
                <h4 class="bg-white padding-top-10 padding-bottom-10">职业发展 Career</h4>
                <ul class="no-style">
                    <li class="inline-block">
                        <img src="/images/temp_a.png" class="inline-block v-top margin-left-10" alt="" width="60" height="60">
                        <p class="inline-block font-120 margin-left-10 margin-top-5"><strong>猎头职位 <br><small>职场专家，助您再登巅峰</small></strong></p>
                    </li>
                    <li class="inline-block">
                        <img src="/images/temp_c.png" class="inline-block v-top margin-left-10" alt="" width="60" height="60">
                        <p class="inline-block font-120 margin-left-10 margin-top-5"><strong>兼职猎手 <br><small>推荐面试，赚取佣金</small></strong></p>
                    </li>
                    <li class="inline-block">
                        <img src="/images/temp_b.png" class="inline-block v-top margin-left-10" alt="" width="60" height="60">
                        <p class="inline-block font-120 margin-left-10 margin-top-5"><strong>人才测评 <br><small>了解自己，规划职业生涯</small></strong></p>
                    </li>/
                </ul>
            </div>
        </div>
    </div>
</div>
@include('layout.contact')
@include('layout.footer')
<script src="/scripts/site/slider.js"></script>
<script src="/scripts/site/home.js"></script>
<script>
    $(function () {
        var slideIndex = 0, slideDegree = 0;
        $('.slide-list .arrow').click(function () {
            var direct = ~~$(this).data('direct');
            slideIndex += direct;
            var idx = slideIndex % 4, tables = $('.slide-content table'), lights = $('.slide-light span');
            idx = idx < 0 ? 4 + idx : idx;
            //tables.eq(idx).addClass('active').siblings('table').removeClass('active');
            lights.eq(idx).addClass('active').siblings('span').removeClass('active');
            var degree = idx * -680;
            $('.slide-content>div').css('left', degree+'px');
        });
    });
</script>
@stop