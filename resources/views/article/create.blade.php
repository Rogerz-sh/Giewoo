@extends('layout.manager')
@section('title', '发布文章')
@section('content')
    <div class="wrap bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="/manager/">首页</a></li>
                    <li><a href="/article/">文章管理</a></li>
                    <li>发布文章</li>
                </ul>
            </div>
            <div class="row">
                <form id="form" action="" class="form form-horizontal" onsubmit="return false">
                    <blockquote>
                        <p>文章基本信息</p>
                    </blockquote>
                    <div class="form-group">
                        <label class="control-label col-xs-2">文章标题</label>
                        <div class="col-xs-10">
                            <input type="text" name="title" id="title" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">原文作者</label>
                            <div class="col-xs-8 help-box">
                                <input type="text" name="author" id="author" class="form-control" />
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">发布日期</label>
                            <div class="col-xs-8 help-box">
                                <input type="text" name="date" id="date" value="" class="form-control size-full" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">文章来源</label>
                            <div class="col-xs-8 help-box">
                                <div class="col-xs-4 no-padding">
                                    <label class="form-control-static">
                                        <input type="radio" name="source" value="网络" checked>
                                        <span class="text">网络</span>
                                    </label>
                                </div>
                                <div class="col-xs-4 no-padding">
                                    <label class="form-control-static">
                                        <input type="radio" name="source" value="原创">
                                        <span class="text">原创</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">文章类目</label>
                            <div class="col-xs-8 help-box">
                                <select name="type" id="type" class="form-control size-full">
                                    <option value="">请选择</option>
                                    <option value="1">职场动态</option>
                                    <option value="2">即沃学堂</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">插图</label>
                        <div class="col-xs-10 help-box">
                            <input type="file" name="upload" id="upload" class="form-control" />
                            <input type="hidden" name="picture" id="picture" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">正文</label>
                        <div class="col-xs-10 help-box">
                            <textarea name="content" id="content" rows="18" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-10 col-xs-offset-2">
                            <button class="btn btn-success col-xs-2">保存</button>
                            <button class="btn btn-danger col-xs-2 margin-left-20">取消</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('body-script')
    <script src="/scripts/plugins/form.js"></script>
    <script src="/scripts/article/create.js"></script>
@stop