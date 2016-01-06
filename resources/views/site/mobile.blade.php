<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="keywords" content="即沃，人才咨询，人才服务，人才甄选，背景调查">
    <meta name="description" content="即沃，中国领先的人才咨询服务机构。目前公司拥有100余名专业顾问，合作的客户主要有在华的500强公司、国有和民营企业、境内外上市公司等，服务行业覆盖50多个细分领域，客户满意率91%以上。">
    <link rel="stylesheet" href="/styles/bootstrap.min.css">
    <link rel="stylesheet" href="/styles/font-awesome.min.css">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/site/mobile.css">
    <script src="/scripts/jquery.min.js"></script>
    <script src="/scripts/underscore.min.js"></script>
    <script src="/scripts/prototype.js"></script>
    <script src="/scripts/plugins/ajax.js"></script>
    <title>即沃咨询</title>
</head>
<body>
<div class="container-fluid">
    <div class="row pos-rel margin-bottom-20">
        <div class="col-xs-12 padding-top-10">
            <img src="/images/giewoo.png" alt="giewoo" width="50" class="pos-abs bordered border-color-gray">
            <h3 class="padding-left-60">即沃咨询 <small class="pull-right padding-top-10"><i class="fa fa-mobile"></i> 400-670-7725</small></h3>
        </div>
    </div>
    <div class="row bg-dark-orange white padding-top-10 padding-bottom-10">
        <div class="col-xs-12">
            <p class="indent">即沃，中国领先的人才咨询服务机构，一站式咨询服务解决方案的提供商。</p>
            <p class="indent">自2008年在香港成立以来，始终遵循专业化、规模化的发展方向，公司现以上海为中心，业务范围辐射全国。目前公司拥有100余名专业顾问，具有出众的职业背景和广泛的人脉资源，能给雇主提供迅捷、有效、高品质的猎头服务。作为在中国拥有多年实操经验的专业人才咨询公司，目前已经成功帮助客户完成30000多个中高端职位的招聘，满意率91%以上，成为众多雇主信赖的人才战略伙伴，为客户创造超越期望的价值。</p>
        </div>
    </div>
    <div class="row margin-top-10">
        <div class="col-xs-12">
            <h4>专注领域</h4>
            <ul id="area">
                <li data-type="1" class="active">IT&互联网</li>
                <li data-type="2">金融</li>
                <li data-type="3">房地产</li>
                <li data-type="4">机械制造</li>
                <li data-type="5">文化健康&旅游</li>
                <li data-type="6">消费品</li>
            </ul>
        </div>
        <div class="col-xs-12 margin-top-10">
            <ul class="area-list active" data-type="1">
                @foreach($jobList as $job)
                    @if($job->type == 1)<li>{{$job->job_name}} <span class="orange pull-right">{{$job->salary}}</span><br><span class="dark-gray">{{$job->company_name}}</span></li>@endif
                @endforeach
            </ul>
            <ul class="area-list" data-type="2">
                @foreach($jobList as $job)
                    @if($job->type == 2)<li>{{$job->job_name}} <span class="orange pull-right">{{$job->salary}}</span><br><span class="dark-gray">{{$job->company_name}}</span></li>@endif
                @endforeach
            </ul>
            <ul class="area-list" data-type="3">
                @foreach($jobList as $job)
                    @if($job->type == 3)<li>{{$job->job_name}} <span class="orange pull-right">{{$job->salary}}</span><br><span class="dark-gray">{{$job->company_name}}</span></li>@endif
                @endforeach
            </ul>
            <ul class="area-list" data-type="4">
                @foreach($jobList as $job)
                    @if($job->type == 4)<li>{{$job->job_name}} <span class="orange pull-right">{{$job->salary}}</span><br><span class="dark-gray">{{$job->company_name}}</span></li>@endif
                @endforeach
            </ul>
            <ul class="area-list" data-type="5">
                @foreach($jobList as $job)
                    @if($job->type == 5)<li>{{$job->job_name}} <span class="orange pull-right">{{$job->salary}}</span><br><span class="dark-gray">{{$job->company_name}}</span></li>@endif
                @endforeach
            </ul>
            <ul class="area-list" data-type="6">
                @foreach($jobList as $job)
                    @if($job->type == 6)<li>{{$job->job_name}} <span class="orange pull-right">{{$job->salary}}</span><br><span class="dark-gray">{{$job->company_name}}</span></li>@endif
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row margin-top-10">
        <div class="col-xs-12">
            <h4>我们的服务</h4>
            <ul class="top-nav">
                <li class="col-xs-4 active">人才服务</li>
                <li class="col-xs-4">管理咨询</li>
                <li class="col-xs-4">知名客户</li>
            </ul>
            <div class="clearfix"></div>
            <ul class="top-nav-content">
                <li class="active">
                    <p class="indent">聚焦客户关注的服务效率和成本，即沃团队持续为企业提供专业、高效的中高端人才服务。我们的核心人才服务包括为企业提供人才需求分析、人才评估与甄选、背景调查、薪酬咨询、满意度调查等。我们的服务对象主要是跨国公司在中国的投资机构、中外合资企业、国内本土大中型企业，以及其他成长性良好的发展型企业。
                    <p class="indent">我们的解决方案已协助众多客户高效地管理HR运营效力，加速HR战略转型，帮助HR运营团队从繁琐的事务性工作中解脱出来，专注于核心业务的发展，提升成本的有效性，全力协助其达成业务目标，同时降低运营风险。</p>
                </li>
                <li>
                    <p class="indent">即沃管理咨询学院</p>
                    <p class="indent">我们基于人才服务积累的庞大精准数据信息，为企业提供薪酬福利调研、人才配置与组织结构调研、人才管理调研、定岗与工作分析设计、能力素质模型设计、员工满意度调查等咨询服务，旨在协助企业确定战略、发些问题、提供解决方案，并提供最具价值的人才管理软件，让更多优秀人才不仅能进得来，且要用得好、留得住，更要发挥超预期的价值。</p>
                    <p class="indent">作为中国领先的中高端人才咨询服务商，我们的团队更懂得人才在企业中的角色、作用和价值，也更清楚人才对企业可能带来的风险和阻碍。截至目前，即沃咨询顾问已与超过10,000家优秀企业合作，参与70%以上决策变革，服务范围覆盖100 余个城市、50多个细分行业。</p>
                </li>
                <li class="text-center">
                    <img src="/images/example/it互联网/百度.png" alt="百度" height="30" class="bordered border-color-gray">
                    <img src="/images/example/it互联网/巨人网络.png" alt="巨人网络" height="30" class="bordered border-color-gray">
                    <img src="/images/example/it互联网/美丽说.png" alt="美丽说" height="30" class="bordered border-color-gray">
                    <img src="/images/example/it互联网/泰科思.png" alt="泰科思" height="30" class="bordered border-color-gray">
                    <img src="/images/example/it互联网/新浪.png" alt="新浪" height="30" class="bordered border-color-gray">
                    <img src="/images/example/it互联网/九游.png" alt="九游" height="30" class="bordered border-color-gray">
                    <img src="/images/example/it互联网/因特尔.png" alt="因特尔" height="30" class="bordered border-color-gray">
                    <img src="/images/example/金融/安邦保险.png" alt="安邦保险" height="30" width="70" class="bordered border-color-gray">
                    <img src="/images/example/金融/红岭创投.png" alt="红岭创投" height="30" class="bordered border-color-gray">
                    <img src="/images/example/金融/花旗银行.png" alt="花旗银行" height="30" class="bordered border-color-gray">
                    <img src="/images/example/金融/汇丰银行.png" alt="汇丰银行" height="30" class="bordered border-color-gray">
                    <img src="/images/example/金融/拍拍贷.png" alt="拍拍贷" height="30" class="bordered border-color-gray">
                    <img src="/images/example/金融/浦发银行.png" alt="浦发银行" height="30" class="bordered border-color-gray">
                    <img src="/images/example/房地产建筑/宝龙地产.png" alt="宝龙地产" height="30" class="bordered border-color-gray">
                    <img src="/images/example/房地产建筑/华润置地.png" alt="华润置地" height="30" class="bordered border-color-gray">
                    <img src="/images/example/房地产建筑/绿地地产.png" alt="绿地地产" height="30" class="bordered border-color-gray">
                    <img src="/images/example/机械制造汽车/北大先锋.png" alt="北大先锋" height="30" class="bordered border-color-gray">
                    <img src="/images/example/房地产建筑/首都开发股份.png" alt="首都开发股份" height="30" width="60" class="bordered border-color-gray">
                    <img src="/images/example/房地产建筑/高力.png" alt="高力" height="30" class="bordered border-color-gray">
                    <img src="/images/example/房地产建筑/万科.png" alt="万科" height="30" class="bordered border-color-gray">
                    <img src="/images/example/机械制造汽车/方正电机.png" alt="方正电机" height="30" class="bordered border-color-gray">
                    <img src="/images/example/机械制造汽车/徐工集团.png" alt="徐工集团" height="30" class="bordered border-color-gray">
                    <img src="/images/example/机械制造汽车/银河表计.png" alt="银河表计" height="30" class="bordered border-color-gray">
                    <img src="/images/example/机械制造汽车/首汽集团.png" alt="首汽集团" height="30" class="bordered border-color-gray">
                    <img src="/images/example/消费品/苏宁易购.png" alt="苏宁易购" height="30" class="bordered border-color-gray">
                    <img src="/images/example/机械制造汽车/吉利.png" alt="吉利" height="30" width="40" class="bordered border-color-gray">
                    <img src="/images/example/文化养老旅游/39健康.png" alt="39健康" height="30" width="100" class="bordered border-color-gray">
                    <img src="/images/example/文化养老旅游/乐视影业.png" alt="乐视影业" height="30" class="bordered border-color-gray">
                    <img src="/images/example/消费品/阿迪达斯.png" alt="阿迪达斯" height="30" class="bordered border-color-gray">
                    <img src="/images/example/文化养老旅游/遨游网.png" alt="遨游网" height="30" class="bordered border-color-gray">
                    <img src="/images/example/文化养老旅游/博集天卷.png" alt="博集天卷" height="30" class="bordered border-color-gray">
                    <img src="/images/example/文化养老旅游/富迪健康.png" alt="富迪健康" height="30" class="bordered border-color-gray">
                    <img src="/images/example/文化养老旅游/汉藏文化.png" alt="汉藏文化" height="30" class="bordered border-color-gray">
                    <img src="/images/example/消费品/百事.png" alt="百事" height="30" class="bordered border-color-gray">
                    <img src="/images/example/消费品/家乐福.png" alt="家乐福" height="30" class="bordered border-color-gray">
                    <img src="/images/example/消费品/乐购.png" alt="乐购" height="30" class="bordered border-color-gray">
                </li>
            </ul>
        </div>
    </div>
    <div class="row margin-top-10">
        <div class="col-xs-12">
            <h4>联系我们</h4>
            <form action="" class="form form-horizontal">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" id="name" class="form-control" placeholder="您的姓名">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" id="tel" class="form-control" placeholder="您的联系方式">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <span class="help-block orange text-center">提交后，我们将在24小时内与你取得联系。</span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="btn btn-warning" id="submit">提交</div>
                        <span class="help-inline margin-left-10" id="info"></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $(function () {

        $('#area').delegate('li', 'click', function () {
            var type = $(this).data('type');
            $(this).addClass('active').siblings().removeClass('active');
            $('.area-list').removeClass('active');
            $('.area-list[data-type="{0}"]'.format(type)).addClass('active');
        });

        $('.top-nav li').each(function (i, li) {
            $(li).click(function () {
                $(this).addClass('active').siblings().removeClass('active');
                $('.top-nav-content li').eq(i).addClass('active').siblings().removeClass('active');
            });
        });

        $('#submit').click(function () {
            var name = $('#name').val(), tel = $('#tel').val();
            if (_.isEmpty(name) || _.isEmpty(tel)) {
                $('#info').addClass('red').text('姓名或联系方式不能为空');
                return;
            } else {
                $('#info').removeClass('red').text();

                var data = {name: name, tel: tel, type: 'WAP'};
                $.$ajax.post('/site/create-message', {message: data}, function (res) {
                    $('#info').addClass('green').text('提交成功');
                });
            }
        });
    });
</script>
</body>
</html>