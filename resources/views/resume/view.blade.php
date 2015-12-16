@extends('layout.enterprise')
@section('content')
    <div class="wrap bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="/enterprise/">首页</a></li>
                    <li>查看简历{{$id}}</li>
                </ul>
            </div>
            <div class="row">
                <blockquote>
                    <p>基本信息</p>
                </blockquote>
            </div>
        </div>
    </div>
@stop