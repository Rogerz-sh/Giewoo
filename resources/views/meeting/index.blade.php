@extends('layout.enterprise')
@section('content')
    <div class="wrap bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="/enterprise/">首页</a></li>
                    <li>招聘会</li>
                </ul>
            </div>
            <div class="row margin-top-20">
                <blockquote>
                    <p>报名中的招聘会 <a class="btn btn-success btn-sm"><i class="fa fa-check"></i> 统一报名</a>
                    </p>
                </blockquote>
                <div class="col-xs-12">
                    <div class="col-xs-6">
                        <div class="box bordered padding-10">
                            <h4>IT精英专场招聘会 <small class="pull-right">格林豪泰大酒店</small></h4>
                            <div>
                                <p class="dark-gray pull-left">发起人： <span>即沃官方</span></p>
                                <p class="dark-gray pull-right">举办日期： <span>2015-11-30</span></p>
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <p class="dark-gray pull-left">已报名企业： <span>3家</span></p>
                                <p class="dark-gray pull-right">剩余展位： <span>4个</span></p>
                            </div>
                            <div class="clearfix"></div>
                            <label class="green"><input type="checkbox" name="" id=""><span class="text">同意报名参会</span></label>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="box bordered padding-10">
                            <h4>金融行业专场招聘会 <small class="pull-right">格林豪泰大酒店</small></h4>
                            <div>
                                <p class="dark-gray pull-left">发起人： <span>上海聚财富</span></p>
                                <p class="dark-gray pull-right">举办日期： <span>2015-12-15</span></p>
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <p class="dark-gray pull-left">已报名企业： <span>5家</span></p>
                                <p class="dark-gray pull-right">剩余展位： <span>2个</span></p>
                            </div>
                            <div class="clearfix"></div>
                            <label class="green"><input type="checkbox" name="" id=""><span class="text">同意报名参会</span></label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <blockquote>
                    <p>已报名的招聘会</p>
                </blockquote>
            </div>
        </div>
    </div>
@stop
@section('body-script')
    {{--<script src="/scripts/resume/index.js"></script>--}}
@stop