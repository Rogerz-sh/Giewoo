@extends('layout.manager')
@section('title', '首页')
@section('content')
    <div class="wrap bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li>首页</li>
                </ul>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <div class="col-xs-10 col-xs-offset-1 bg-orange border-radius-5 text-center padding-20">
                        <h3><a class="white" href="/virtual-job/index"><i class="fa fa-coffee"></i> 职位管理</a></h3>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="col-xs-10 col-xs-offset-1 bg-orange border-radius-5 text-center padding-20">
                        <h3><a class="white" href="/article/index"><i class="fa fa-file"></i> 文章管理</a></h3>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="col-xs-10 col-xs-offset-1 bg-orange border-radius-5 text-center padding-20">
                        <h3><a class="white" href="/example1/index"><i class="fa fa-trophy"></i> 案例管理</a></h3>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-xs-4">
                    <div class="col-xs-10 col-xs-offset-1 bg-orange border-radius-5 text-center padding-20">
                        <h3><a class="white" href="/message/index"><i class="fa fa-comment"></i> 留言管理</a></h3>
                    </div>
                </div>
                {{--<div class="col-xs-4">--}}
                    {{--<div class="col-xs-10 col-xs-offset-1 bg-orange border-radius-5 text-center padding-20">--}}
                        {{--<h3><a class="white" href="/article/index"><i class="fa fa-file"></i> 文章管理</a></h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-xs-4">--}}
                    {{--<div class="col-xs-10 col-xs-offset-1 bg-orange border-radius-5 text-center padding-20">--}}
                        {{--<h3><a class="white" href="/example/index"><i class="fa fa-trophy"></i> 案例管理</a></h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>
@stop