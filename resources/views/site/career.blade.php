@extends('layout.header')
@section('title', '即沃咨询 - 职业发展')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper">
                <div style="width:100%;height:300px;background:url('/images/top/career.png') no-repeat center;"></div>
            </div>
        </div>
        <div class="row margin-top-20">
            <div class="wrap">
                <ul class="breadcrumb">
                    <li><a class="orange" href="/">首页</a></li>
                    <li>职业发展</li>
                </ul>
            </div>
        </div>
        <div class="row margin-bottom-20">
            <div class="wrap">
                <div class="col-xs-4">
                    <ul class="site-nav">
                        <li data-target="#rccp" class="active">人才测评</li>
                    </ul>
                </div>
                <div class="col-xs-8">
                    <ul class="site-content">
                        <li class="active" id="rccp">
                            <h3 class="padding-left-25">人才测评</h3>
                            <p class="indent line-height-10">人才测评服务：</p>
                            <p class="indent line-height-10">我们提供的人才测评服务，通过系统的测评工具（如性格测评量表，能力测评量表，各行业不同职位胜任能力测评工具、评价中心等）帮助个人客观地了解自己，更清晰地规划自己的职业生涯，帮助企业实现更精准的招聘。</p>
                            <p class="indent line-height-10">为了帮助企业在关键节点的面试及甄选环节能更有效的辨识人才的适配度，即沃测评中心正在研发适用于企业HR招聘管理的高级测评解决方案。届时提供的《测评方案》包括但不限于：</p>

                            <p class="indent line-height-10">《候选人岗位胜任力测评报告》</p>
                            <p class="indent line-height-10">《候选人工作价值观测评报告》</p>
                            <p class="indent line-height-10">《候选人性格测评报告》</p>
                            <p class="indent line-height-10">《管理人员综合测评报告》</p>
                            <p class="indent line-height-10">《候选人与职位匹配度程度综合分析报告》</p>
                            <p class="indent line-height-10">《匹配度较高的候选人综合对比分析报告》</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('layout.contact')
    @include('layout.footer')
    <script src="/scripts/site/home.js"></script>
@stop