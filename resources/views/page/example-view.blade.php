@extends('page.layout')
@section('title', '成功案例 - '.$example->job_name)
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
                        <li><a href="/examples">案例列表</a></li>
                        <li class="active">{{$example->job_name}}</li>
                    </ul>
                    <h3 class="margin-top-50">
                        <div class="flex v-center">
                            <div class="f2">
                                <span class="blue">{{$example->job_name}}</span>
                            </div>
                            <div class="f2">
                                <span class="dark-orange">年薪：{{$example->salary}}万</span>
                            </div>
                        </div>
                    </h3>

                    <p class="dark-gray flex margin-top-50">
                        <span class="margin-right-20 f2">所属企业：</span>
                        <span class="margin-right-20 f2">{{$example->company_name}}</span>
                    </p>
                    <p class="dark-gray flex margin-top-50">
                        <span class="margin-right-20 f2">工作地点：</span>
                        <span class="margin-right-20 f2">{{$example->work_area}}</span>
                    </p>
                    <p class="dark-gray flex margin-top-50">
                        <span class="margin-right-20 f2">岗位类别：</span>
                        <span class="margin-right-20 f2">{{$industryList[$example->industry]}}</span>
                    </p>
                    <p class="dark-gray flex margin-top-50">
                        <span class="margin-right-20 f2">花费周期：</span>
                        <span class="margin-right-20 f2">{{$example->cost}}天</span>
                    </p>
                    <p class="dark-gray flex margin-top-50">
                        <span class="margin-right-20 f2">入职日期：</span>
                        <span class="margin-right-20 f2">{{date('Y-m-d', strtotime($example->publish))}}</span>
                    </p>
                </div>
                <div id="right">
                    <div class="side-box">
                        <h4>其他成功案例</h4>
                        <ul class="side-list">
                            @foreach($examples as $j)
                            <li><a href="/example/{{$j->id}}">{{$j->job_name}}</a></li>
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