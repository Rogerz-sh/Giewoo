@extends('layout.enterprise')
@section('content')
    <div class="wrap margin-top-20 margin-bottom-50">
        <div id="side-bar" class="bg-white padding-15 box-shadow">
            <div class="container-fluid">
                <div class="row">
                    <div class="box bordered padding-10">
                        <img src="/images/logo.jpg" alt="" width="100%">
                    </div>
                    <ul class="margin-top-10 line-height-5">
                        <li>当前级别: <span class="pull-right text-primary">普通会员</span></li>
                        <li>当前经验: <span class="pull-right text-primary">1345</span></li>
                        <li>会员升级还差经验值: <span class="pull-right text-primary">687</span></li>
                        <li>我的人才币: <span class="pull-right text-primary">118</span></li>

                    </ul>
                </div>
            </div>
        </div>
        <div id="main" class="bg-white padding-15 box-shadow">
            <div class="container-fluid">
                <div class="row">
                    <ul class="breadcrumb">
                        <li>首页</li>
                    </ul>
                </div>
                <blockquote>
                    <p>IT精英专场招聘会，将于2016年1月18日在XX酒店举办，目前火热报名中。<a class="btn btn-danger btn-sm">报名参会</a></p>
                </blockquote>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="box bordered padding-10">
                            <div class="row">
                                <div class="col-xs-12">
                                    <span>您目前正在招聘中的职位数：</span><span class="pull-right"><span class="red">2</span> 个</span>
                                </div>
                            </div>
                            <div class="row margin-top-10">
                                <div class="col-xs-12">
                                    <button class="btn btn-success btn-sm size-mini"><i class="fa fa-plus"></i> 发布新职位</button>
                                    <button class="btn btn-primary btn-sm size-mini"><i class="fa fa-search"></i> 查看职位</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="box bordered padding-10">
                            <div class="row">
                                <div class="col-xs-12">
                                    <span>我们已经为您推荐的简历数：</span><span class="pull-right"><span class="red">11</span> 份</span>
                                </div>
                            </div>
                            <div class="row margin-top-10">
                                <div class="col-xs-12">
                                    <button class="btn btn-warning btn-sm size-mini"><i class="fa fa-search"></i> 查看待审核简历</button>
                                    <button class="btn btn-primary btn-sm size-mini"><i class="fa fa-search"></i> 查看面试中简历</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row margin-top-10">
                    <div class="col-xs-12">
                        <p>我的网站秘书</p>
                    </div>
                    <div class="col-xs-12">
                        <div class="box bordered padding-10">
                            <p>[2015-11-10] 您收到了 <span class="text-primary">PHP开发工程师</span> 的推荐简历 <span class="red">3</span> 份</p>
                            <p>[2015-11-09] 您发布了 <span class="text-primary">PHP开发工程师</span> 职位</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@stop