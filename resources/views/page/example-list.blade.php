@extends('page.layout')
@section('title', '案例列表')
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
                        <li class="active">案例列表</li>
                    </ul>
                    <h3 class="margin-bottom-30"> 成功案例</h3>
                    <ul class="example-list">
                        @foreach($examples as $example)
                        <li>
                            <a class="dark-gray" href="/example/{{$example->id}}">
                            <span class="margin-right-5">{{date('Y-m-d', strtotime($example->publish))}}</span>
                            <span class="margin-right-5">{{$example->work_area}}</span>
                            <span class="margin-right-5 blue bold font-110">{{$example->job_name}}</span>
                            <span class="margin-right-5">入职成功</span>

                            <span class="pull-right font-120 orange bold">年薪：{{$example->salary}}万</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    {{--<div class="art-more">加载更多</div>--}}
                </div>
                <div id="right">
                    <div class="side-box">
                        <h4>热门职位</h4>
                        <ul class="side-list">
                            @foreach($jobs as $job)
                            <li><a href="/job/{{$job->id}}">{{$job->job_name}}</a></li>
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