@extends('layout.enterprise')
@section('content')
    <div class="wrap bg-white padding-15 margin-top-20 margin-bottom-50 box-shadow">
        <div class="container-fluid">
            <div class="row">
                <ul class="breadcrumb">
                    <li><a href="/enterprise/">首页</a></li>
                    <li>发布职位</li>
                </ul>
            </div>
            <div class="row">
                <form id="form" action="" class="form form-horizontal">
                    <blockquote>
                        <p>职位基本信息</p>
                    </blockquote>
                    <div class="form-group">
                        <label class="control-label col-xs-2">职位名称</label>
                        <div class="col-xs-10">
                            <input type="text" name="job_name" id="job_name" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 no-padding">
                            <label class="control-label col-xs-4">工作地点</label>
                            <div class="col-xs-8">
                                <select name="job_seriers" multiple id="" class="form-control size-full">
                                    <option value="0">上海</option>
                                    <option value="0">北京</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding">
                            <label class="control-label col-xs-4">所属部门</label>
                            <div class="col-xs-8">
                                <input type="text" name="depart" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-6 no-padding">
                            <label class="control-label col-xs-4">薪酬范围</label>
                            <div class="col-xs-8">
                                <div class="col-xs-5 no-padding">
                                    <div class="input-group">
                                        <input type="text" name="salary_form" id="" class="form-control" numeric>
                                        <span class="input-group-addon">K</span>
                                    </div>
                                </div>
                                <div class="col-xs-2 text-center form-control-static">至</div>
                                <div class="col-xs-5 no-padding">
                                    <div class="input-group">
                                        <input type="text" name="salary_to" id="" class="form-control"  >
                                        <span class="input-group-addon">K</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding">
                            <label class="control-label col-xs-4">外语要求</label>
                            <div class="col-xs-8">
                                <select name="lang_require" id="" class="form-control size-full">
                                    <option value="0">不限</option>
                                    <option value="en">英语</option>
                                    <option value="jp">日语</option>
                                    <option value="cn">普通话</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">工作年限</label>
                        <div class="col-xs-4">
                            <div class="col-xs-5 no-padding">
                                <div class="input-group">
                                    <input type="text" name="years_form" id="" class="form-control" numeric>
                                    <span class="input-group-addon">年</span>
                                </div>
                            </div>
                            <div class="col-xs-2 text-center form-control-static">至</div>
                            <div class="col-xs-5 no-padding">
                                <div class="input-group">
                                    <input type="text" name="years_to" id="" class="form-control" numeric>
                                    <span class="input-group-addon">年</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding">
                            <label class="form-control-static"><input type="checkbox" name="" id=""><span class="text">含以上</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">招聘人数</label>
                        <div class="col-xs-4">
                            <div class="input-group">
                                <input type="text" name="employee_num" id="" class="form-control">
                                <span class="input-group-addon">人</span>
                            </div>
                        </div>
                        <div class="col-xs-6 no-padding">
                            <label class="form-control-static"><input type="checkbox" name="" id=""><span class="text">含以上</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">学历要求</label>
                        <div class="col-xs-4">
                            <select name="degree" id="" class="form-control size-full">
                                <option value="0">不限</option>
                                <option value="1">大专</option>
                                <option value="2">本科</option>
                                <option value="3">硕士</option>
                            </select>
                        </div>
                        <div class="col-xs-6 no-padding">
                            <label class="form-control-static"><input type="checkbox" name="" id=""><span class="text">含以上</span></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">管理经验</label>
                        <div class="col-xs-4">
                            <div class="col-xs-4 no-padding">
                                <label class="form-control-static">
                                    <input type="radio" name="manage_require" id="" checked>
                                    <span class="text">不限</span>
                                </label>
                            </div>
                            <div class="col-xs-4 no-padding">
                                <label class="form-control-static">
                                    <input type="radio" name="manage_require" id="">
                                    <span class="text">必须</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">性别要求</label>
                        <div class="col-xs-4">
                            <div class="col-xs-4 no-padding">
                                <label class="form-control-static">
                                    <input type="radio" name="sex_require" id="" checked>
                                    <span class="text">不限</span>
                                </label>
                            </div>
                            <div class="col-xs-4 no-padding">
                                <label class="form-control-static">
                                    <input type="radio" name="sex_require" id="">
                                    <span class="text">男</span>
                                </label>
                            </div>
                            <div class="col-xs-4 no-padding">
                                <label class="form-control-static">
                                    <input type="radio" name="sex_require" id="">
                                    <span class="text">女</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <label class="form-control-static darkgray">性别要求不对外公布，仅在推荐匹配中使用到</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">工作内容</label>
                        <div class="col-xs-10">
                            <textarea name="job_desc" id="" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">职位要求</label>
                        <div class="col-xs-10">
                            <textarea name="job_require" id="" rows="3" class="form-control"></textarea>
                        </div>
                    </div>
                    <blockquote>
                        <p>职位精准定位</p>
                    </blockquote>
                    {{--<div class="form-group">--}}
                        {{--<div class="col-xs-11 col-xs-offset-1">--}}
                            {{--<label>职位关键词</label>--}}
                            {{--<input type="text" name="job_keywords" id="" class="form-control">--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    <div class="form-group">
                        <label class="control-label col-xs-2">职位关键词</label>
                        <div class="col-xs-10">
                            <input type="text" name="job_keywords" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">候选人从事的行业</label>
                        <div class="col-xs-8">
                            <input type="text" name="job_keywords" id="" class="form-control">
                        </div>
                        <div class="col-xs-2 no-padding-left">
                            <select name="hxr_require" id="" class="size-full">
                                <option value="1">这些行业优先考虑</option>
                                <option value="2">必须有此行业经验</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">候选人来自的公司</label>
                        <div class="col-xs-10">
                            <input type="text" name="hxr_company" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">候选人来自的学校</label>
                        <div class="col-xs-8">
                            <input type="text" name="hxr_school" id="" class="form-control">
                        </div>
                        <div class="col-xs-2 no-padding-left">
                            <label class="form-control-static">
                                <input type="checkbox" name="hxr_school_require" id="">
                                <span class="text">211 / 985</span>
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-2">职位亮点</label>
                        <div class="col-xs-10">
                            <input type="text" name="job_nice" id="" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-10 col-xs-offset-2">
                            <button class="btn btn-success col-xs-2">仅保存</button>
                            <button class="btn btn-danger col-xs-2 margin-left-20">取消</button>
                            <button class="btn btn-primary col-xs-2 margin-left-20">保存并发布</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
@section('body-script')
    <script src="/scripts/job/create.js"></script>
@stop