@extends('layout.manager')
@section('title', '文章列表')
@section('content')
    <div class="wrapper bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="/manager/">首页</a></li>
                    <li>文章列表</li>
                </ul>
            </div>
            <div class="row margin-bottom-10">
                <div class="col-xs-1"><a href="/article/create" class="btn btn-success"><i class="fa fa-plus"></i> 发布文章</a></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div id="grid"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="/scripts/article/index.js"></script>
@stop