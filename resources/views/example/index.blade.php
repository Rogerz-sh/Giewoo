@extends('layout.manager')
@section('title', '案例列表')
@section('content')
    <div class="wrapper bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="/manager/">首页</a></li>
                    <li>案例列表</li>
                </ul>
            </div>
            <div class="row margin-bottom-10">
                <div class="col-xs-1"><a href="/example/create" class="btn btn-success"><i class="fa fa-plus"></i> 新增案例</a></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="grid"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="/scripts/example/index.js"></script>
@stop