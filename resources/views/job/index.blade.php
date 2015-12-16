@extends('layout.enterprise')
@section('content')
    <div class="wrap bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="/enterprise/">首页</a></li>
                    <li>社招职位</li>
                </ul>
            </div>
            <div class="row">
                <a href="/job/create" class="btn btn-success"><i class="fa fa-plus"></i> 我要发布新职位</a>
            </div>
            <div class="row margin-top-20">
                <div class="tabs">
                    <div class="tab-title">
                        <ul>
                            <li class="active">招聘中职位</li>
                            <li>草稿职位</li>
                            <li>暂停职位</li>
                            <li>结束职位</li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab">
                            <div id="grid"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                {{--<div id="grid"></div>--}}
            </div>
        </div>

    </div>
@stop
@section('body-script')
    <script src="/scripts/job/index.js"></script>
@stop