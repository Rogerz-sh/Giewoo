@extends('page.layout')
@section('title', $art->title)
@section('content')
<?php
    $listUrl = $art->type == 1 ? 'dynamic' : 'research';
    $sideUrl = $art->type == 1 ? 'research' : 'dynamic';
?>
<div class="wrap">
    <div class="row">
        <div class="col-xs-12">
            <img src="/new-page/image/logo_b.png" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 pos-rel">
            <div id="main">
                <div id="left">
                    <ul class="breadcrumb">
                        <li><a href="/">首页</a></li>
                        <li><a href="/{{$listUrl}}">文章列表 - {{$type}}</a></li>
                        <li class="active">{{$art->title}}</li>
                    </ul>
                    <h3 class="text-center margin-top-10 margin-bottom-30">{{$art->title}}</h3>
                    <p class="text-center"><img class="image" src="http://www.giewoo.com{{$art->picture}}" alt="{{$art->title}}"></p>
                    <p class="padding-30">{!! nl2br($art->content) !!}</p>
                    <p class="padding-30 gray"><i>作者：<span>{{$art->author}}</span></i> <i class="pull-right">发布日期：<span>{{date('Y-m-d', strtotime($art->date))}}</span></i></p>
                </div>
                <div id="right">
                    <div class="side-box">
                        <h4>更多精彩文章</h4>
                        <ul class="side-list">
                            @foreach($list as $l)
                            <li><a href="/{{$listUrl}}/{{$l->id}}">{{$l->title}}</a></li>
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