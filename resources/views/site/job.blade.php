@extends('layout.header')
@section('title', '即沃咨询 - 职位信息')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="wrap bg-white margin-top-20 margin-bottom-20 padding-10">

                <div class="col-xs-3 text-center">
                    {{--<img src="/images/logo_eye.png" alt="" width="90%" class="border-solid border-width-1 border-color-main margin-top-20">--}}
                    <div class="border-solid border-width-1 border-color-main margin-top-20 v-align bg-light-orange">
                        <div class="white padding-30 font-190" id="company_name">{{$job->company_name}}</div>
                    </div>
                </div>
                <div class="col-xs-9 no-padding-left">
                    <div class="col-xs-12 margin-top-10">
                        <blockquote class="no-margin-bottom">
                            <p>基本信息</p>
                        </blockquote>
                    </div>
                    <div class="col-xs-12">
                        <div class="col-xs-8">
                            <h2 id="job_name">{{$job->job_name}} </h2>
                        </div>
                        <div class="col-xs-4"><h3 class="orange">年薪<span id="salary">{{$job->salary}}</span></h3></div>
                    </div>
                    <div class="col-xs-12 dark-gray">
                        <div class="col-xs-4">学历要求： <span id="req_degree">{{$job->req_degree}}</span></div>
                        <div class="col-xs-4">性别要求： <span id="req_sex">{{$job->req_sex}}</span></div>
                        <div class="col-xs-4">年龄要求： <span id="req_age">{{$job->req_age}}</span></div>
                    </div>
                    <div class="col-xs-12 dark-gray margin-top-10">
                        <div class="col-xs-4">工作地点： <span id="work_area">{{$job->work_area}}</span></div>
                        <div class="col-xs-4">工作年限： <span id="years">{{$job->years}}</span></div>
                        <div class="col-xs-4">招聘人数： <span id="number">{{$job->number}}</span></div>
                    </div>
                    <div class="col-xs-12 margin-top-30">
                        <blockquote class="no-margin-bottom">
                            <p>岗位职责</p>
                        </blockquote>
                    </div>
                    <div class="col-xs-12">
                        <div class="padding-10 dark-gray">
                            <p class="line-height-10" id="job_desc">{!! nl2br($job->job_desc) !!}</p>
                        </div>
                    </div>

                    <div class="col-xs-12 margin-top-20">
                        <blockquote class="no-margin-bottom">
                            <p>任职要求</p>
                        </blockquote>
                    </div>
                    <div class="col-xs-12">
                        <div class="padding-10 dark-gray">
                            <p class="line-height-10" id="job_requires">{!! nl2br($job->job_requires) !!}</p>
                        </div>
                    </div>

                    {{--<div class="col-xs-4">--}}
                        {{--<button class="btn btn-primary full-width">我要应聘该职位</button>--}}
                    {{--</div>--}}
                </div>

            </div>
        </div>
    </div>
    @include('layout.footer')
    <script src="/scripts/plugins/ajax.js"></script>
    <script src="/scripts/site/home.js"></script>
@stop