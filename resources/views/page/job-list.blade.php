@extends('page.layout')
@section('title', '职位列表 - '.$industry)
@section('content')
<div class="wrap">
    <div class="row">
        <div class="col-xs-12">
            <a href="/"><img src="/new-page/image/logo_b.png" alt="即沃咨询"></a>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 pos-rel">
            <div id="main">
                <div id="left">
                    <ul class="breadcrumb">
                        <li><a href="/">首页</a></li>
                        <li class="active">职位列表 - {{$industry}}</li>
                    </ul>
                    <h3 class="margin-bottom-30"> {{$industry}}</h3>
                    <ul class="job-list">
                        @foreach($jobList as $job)
                        {{--<li>--}}
                            {{--<h4><div class="job-title"><a href="/page/job-view/{{$job->id}}">{{$job->job_name}}</a> <small> <span>{{$job->company_name}}</span> <span class="margin-left-10">工作地点：{{$job->work_area}}</span></small></div> <span class="pull-right dark-orange">年薪： {{$job->salary}}</span></h4>--}}
                            {{--<p class="gray job-content">{{$job->job_desc}}</p>--}}
                        {{--</li>--}}
                        <li>
                            <div class="flex v-center">
                                <div class="f2">
                                    <p><span class="font-130 bold blue"><a href="/job/{{$job->id}}">{{$job->job_name}}</a></span> <span class="pull-right gray">工作地点：{{$job->work_area}}</span></p>
                                    <p><span class="dark-gray">{{$job->company_name}}</span> <span class="pull-right gray">工作年限：{{$job->years}}</span></p>
                                </div>
                                <div class="f1">
                                    <span class="pull-right font-180 dark-orange">年薪：{{$job->salary}}</span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="art-more">加载更多职位</div>
                </div>
                <div id="right">
                    <div class="side-box">
                        <h4>热门行业</h4>
                        <ul class="side-list">
                            <?php $i = 0; ?>
                            @foreach($industryList as $ids)
                            <?php $i++; ?>
                            <li><a href="/jobs/{{$i}}">{{$ids}}</a></li>
                            @endforeach
                        </ul>

                        <div class="side-contact">
                            <h5>联系我们</h5>
                            <p>地址：上海黄浦区北京东路666号科技京城西楼30楼</p>
                            <p>电话：400-670-7725</p>
                            <p>邮箱：sh@giewoo.com</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@stop