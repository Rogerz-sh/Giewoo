@extends('layout.enterprise')
@section('content')
    <div class="wrap bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="/enterprise/">首页</a></li>
                    <li>推荐简历</li>
                </ul>
            </div>
            <div class="row margin-top-20">
                <div class="tabs">
                    <div class="tab-title">
                        <ul>
                            <li data-source="0" class="active">所有简历</li>
                            <li data-source="1">速配简历</li>
                            <li data-source="2">招聘会简历</li>
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
    <script src="/scripts/resume/index.js"></script>
@stop