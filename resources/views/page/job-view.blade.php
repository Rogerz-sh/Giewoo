@extends('page.layout')
@section('title', $job->job_name.' - '.$job->company_name)
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
                        <li><a href="/jobs/{{$job->industry}}">职位列表 - {{$industry}}</a></li>
                        <li class="active">{{$job->job_name}}</li>
                    </ul>
                    <h3>
                        <div class="flex v-center">
                            <div class="f2">
                                <span class="blue">{{$job->job_name}}</span><br> <small>{{$job->company_name}}</small>
                            </div>
                            <div class="f1">
                                <span class="pull-right dark-orange">年薪：{{$job->salary}}</span>
                            </div>
                        </div>
                    </h3>
                    <p class="dark-gray flex">
                        <span class="margin-right-20 f1">工作地点</span>
                        <span class="margin-right-20 f1">招聘人数</span>
                        <span class="margin-right-20 f1">工作年限</span>
                        <span class="margin-right-20 f1">学历要求</span>
                        <span class="margin-right-20 f1">年龄要求</span>
                        <span class="margin-right-20 f1">性别要求</span>
                    </p>
                    <p class="dark-gray flex">
                        <span class="margin-right-20 f1">{{$job->work_area}}</span>
                        <span class="margin-right-20 f1">{{$job->number}}</span>
                        <span class="margin-right-20 f1">{{$job->years}}</span>
                        <span class="margin-right-20 f1">{{$job->req_degree}}</span>
                        <span class="margin-right-20 f1">{{$job->req_age}}</span>
                        <span class="margin-right-20 f1">{{$job->req_sex}}</span>
                    </p>
                    <h4 class="margin-top-20">职位描述</h4>
                    <p>{!! nl2br($job->job_desc) !!}</p>
                    <h4 class="margin-top-20">任职资格</h4>
                    <p>{!! nl2br($job->job_requires) !!}</p>

                    <p class="margin-top-50 text-right dark-gray">发布日期：{{date('Y-m-d', strtotime($job->updated_at))}}</p>
                </div>
                <div id="right">
                    <div class="side-box">
                        <h4>行业其它职位</h4>
                        <ul class="side-list">
                            @foreach($jobs as $j)
                            <li><a href="/job/{{$j->id}}">{{$j->job_name}}</a></li>
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