@extends('layout.manager')
@section('title', '编辑职位')
@section('content')
    <div class="wrap bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="/manager/">首页</a></li>
                    <li><a href="/virtual-job/">职位管理</a></li>
                    <li>编辑职位</li>
                </ul>
            </div>
            <div class="row">
                <form id="form" action="" class="form form-horizontal" onsubmit="return false">
                    <blockquote>
                        <p>职位基本信息</p>
                    </blockquote>
                    <div class="form-group">
                        <label class="control-label col-xs-2">职位名称</label>
                        <div class="col-xs-10">
                            <input type="hidden" name="id" id="id" value="{{$id}}">
                            <input type="text" name="job_name" id="job_name" class="form-control" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">所属企业</label>
                        <div class="col-xs-10">
                            <input type="text" name="company_name" id="company_name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">工作地点</label>
                            <div class="col-xs-8">
                                <input type="text" name="work_area" id="work_area" class="form-control" value="上海" />
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">年薪范围</label>
                            <div class="col-xs-8">
                                <div class="col-xs-5 no-padding">
                                    <div class="input-group">
                                        <input type="text" name="salary_from" id="salary_from" class="form-control" numeric>
                                        <span class="input-group-addon">万</span>
                                    </div>
                                </div>
                                <div class="col-xs-2 text-center form-control-static">至</div>
                                <div class="col-xs-5 no-padding">
                                    <div class="input-group">
                                        <input type="text" name="salary_to" id="salary_to" class="form-control" numeric>
                                        <span class="input-group-addon">万</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">工作年限</label>
                            <div class="col-xs-8">
                                <div class="col-xs-5 no-padding">
                                    <div class="input-group">
                                        <input type="text" name="years_from" id="years_from" class="form-control" numeric>
                                        <span class="input-group-addon">年</span>
                                    </div>
                                </div>
                                <div class="col-xs-2 text-center form-control-static">至</div>
                                <div class="col-xs-5 no-padding">
                                    <div class="input-group">
                                        <input type="text" name="years_to" id="years_to" class="form-control" numeric>
                                        <span class="input-group-addon">年</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">年龄要求</label>
                            <div class="col-xs-8">
                                <div class="col-xs-5 no-padding">
                                    <div class="input-group">
                                        <input type="text" name="age_from" id="age_from" class="form-control" numeric>
                                        <span class="input-group-addon">岁</span>
                                    </div>
                                </div>
                                <div class="col-xs-2 text-center form-control-static">至</div>
                                <div class="col-xs-5 no-padding">
                                    <div class="input-group">
                                        <input type="text" name="age_to" id="age_to" class="form-control" numeric>
                                        <span class="input-group-addon">岁</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">学历要求</label>
                            <div class="col-xs-8">
                                <select name="req_degree" id="req_degree" class="form-control size-full">
                                    <option value="不限">不限</option>
                                    <option value="大专">大专</option>
                                    <option value="本科">本科</option>
                                    <option value="硕士">硕士</option>
                                    <option value="博士">博士</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">性别要求</label>
                            <div class="col-xs-8">
                                <div class="col-xs-4 no-padding">
                                    <label class="form-control-static">
                                        <input type="radio" name="req_sex" value="不限">
                                        <span class="text">不限</span>
                                    </label>
                                </div>
                                <div class="col-xs-4 no-padding">
                                    <label class="form-control-static">
                                        <input type="radio" name="req_sex" value="男">
                                        <span class="text">男</span>
                                    </label>
                                </div>
                                <div class="col-xs-4 no-padding">
                                    <label class="form-control-static">
                                        <input type="radio" name="req_sex" value="女">
                                        <span class="text">女</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">招聘人数</label>
                            <div class="col-xs-8">
                                <div class="input-group">
                                    <input type="text" name="number" id="number" class="form-control" numeric placeholder="不填表示若干">
                                    <span class="input-group-addon">人</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding error-box">
                            <label class="control-label col-xs-4">岗位类别</label>
                            <div class="col-xs-8">
                                <select class="form-control size-full" name="industry" id="industry">
                                    <option value="">请选择</option>
                                    <option value="1">IT & 互联网</option>
                                    <option value="2">金融</option>
                                    <option value="3">房地产</option>
                                    <option value="4">机械制造</option>
                                    <option value="5">文件 & 养老 & 健康</option>
                                    <option value="6">消费品</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">岗位职责</label>
                        <div class="col-xs-10">
                            <textarea name="job_desc" id="job_desc" rows="6" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">任职要求</label>
                        <div class="col-xs-10">
                            <textarea name="job_requires" id="job_requires" rows="6" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">是否发布到首页</label>
                        <div class="col-xs-4">
                            <div class="col-xs-4 no-padding">
                                <label class="form-control-static">
                                    <input type="radio" name="showing" value="1">
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
    <script src="/scripts/virtual-job/edit.js"></script>
@stop