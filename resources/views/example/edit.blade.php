@extends('layout.manager')
@section('title', '编辑案例')
@section('content')
    <div class="wrap bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="/manager/">首页</a></li>
                    <li><a href="/example1/">案例管理</a></li>
                    <li>编辑案例</li>
                </ul>
            </div>
            <div class="row">
                <form id="form" action="" class="form form-horizontal" onsubmit="return false">
                    <blockquote>
                        <p>编辑案例信息</p>
                    </blockquote>
                    <div class="form-group">
                        <label class="control-label col-xs-2">职位名称</label>
                        <div class="col-xs-10">
                            <input type="hidden" name="id" id="id" value="{{$id}}">
                            <input type="text" name="job_name" id="job_name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">所属企业</label>
                            <div class="col-xs-8 help-box">
                                <input type="text" name="company_name" id="company_name" class="form-control" />
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">入职日期</label>
                            <div class="col-xs-8 help-box">
                                <input type="text" name="publish" id="publish" class="form-control size-full" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">工作地点</label>
                            <div class="col-xs-8 help-box">
                                <input type="text" name="work_area" id="work_area" class="form-control" value="上海" />
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">岗位类别</label>
                            <div class="col-xs-8 help-box">
                                <select class="form-control size-full" name="industry" id="industry">
                                    <option value="">请选择</option>
                                    <option value="1">IT & 互联网</option>
                                    <option value="2">金融</option>
                                    <option value="3">房地产</option>
                                    <option value="4">机械制造</option>
                                    <option value="5">文件 & 养老 & 健康</option>
                                    <option value="6">消费品</option>
                                    <option value="7">化工 & 环保 & 能源</option>
                                    <option value="8">广告 & 传媒 & 教育</option>
                                    <option value="9">交通 & 贸易 & 物流</option>
                                    <option value="10">通信 & 电子 & 硬件</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">花费周期</label>
                            <div class="col-xs-8 help-box">
                                <div class="input-group">
                                    <input type="text" name="cost" id="cost" class="form-control" numeric placeholder="">
                                    <span class="input-group-addon">天</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">岗位年薪</label>
                            <div class="col-xs-8 help-box">
                                <div class="input-group">
                                    <input type="text" name="salary" id="salary" class="form-control" numeric>
                                    <span class="input-group-addon">万</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">是否发布到首页</label>
                        <div class="col-xs-4">
                            <div class="col-xs-4 no-padding">
                                <label class="form-control-static">
                                    <input type="radio" name="showing" value="1" checked>
                                    <span class="text">是</span>
                                </label>
                            </div>
                            <div class="col-xs-4 no-padding">
                                <label class="form-control-static">
                                    <input type="radio" name="showing" value="0">
                                    <span class="text">否</span>
                                </label>
                            </div>
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
    <script src="/scripts/example/edit.js"></script>
@stop