@extends('page.layout')
@section('title', '即沃咨询 - 文章列表')
@section('content')
<?php
    $listUrl = $type == 1 ? 'dynamic' : 'research';
    $sideUrl = $type == 1 ? 'research' : 'dynamic';
    $sideType = $type == 1 ? 2 : 1;
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
                        <li class="active">文章列表 - {{$typeList[$type]}}</li>
                    </ul>
                    <h3> {{$typeList[$type]}}</h3>
                    <ul class="art-list">
                        @foreach($artList as $art)
                        <li>
                            <img src="http://www.giewoo.com{{$art->picture}}" class="art-img" alt="{{$art->title}}">
                            <div class="art-content">
                                <h5 class="art-title"><a href="/{{$listUrl}}/{{$art->id}}">{{$art->title}} </a><small class="art-date">发布日期：{{date('Y-m-d', strtotime($art->date))}}</small></h5>
                                <p class="art-text">{{$art->content}}</p>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    <div class="art-more">加载更多文章</div>
                </div>
                <div id="right">
                    <div class="side-box">
                        <h4>{{$typeList[$sideType]}}</h4>
                        <ul class="side-list">
                            @foreach($list as $l)
                            <li><a href="/{{$sideUrl}}/{{$l->id}}">{{$l->title}}</a></li>
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