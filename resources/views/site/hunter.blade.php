@extends('layout.header')
@section('title', '即沃咨询 - 人才服务')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper">
                <div style="width:100%;height:300px;background:url('/images/top/hunter.png') no-repeat center;"></div>
            </div>
        </div>
        <div class="row margin-top-20">
            <div class="wrap">
                <ul class="breadcrumb">
                    <li><a class="orange" href="/">首页</a></li>
                    <li>人才服务</li>
                </ul>
            </div>
        </div>
        <div class="row margin-bottom-20">
            <div class="wrap">
                <div class="col-xs-4">
                    <ul class="site-nav">
                        <li data-target="#js" class="active">服务介绍</li>
                        <li data-target="#ys">服务优势</li>
                        <li data-target="#lc">服务流程</li>
                        {{--<li data-target="#bz">服务保障</li>--}}
                    </ul>
                </div>
                <div class="col-xs-8">
                    <ul class="site-content">
                        <li class="active" id="js">
                            <h3 class="padding-left-25">服务介绍</h3>
                            <p class="indent">聚焦客户关注的服务效率和成本，即沃团队持续为企业提供专业、高效的中高端人才服务。我们的核心人才服务包括为企业提供人才需求分析、人才评估与甄选、背景调查、薪酬咨询、满意度调查等。我们的服务对象主要是跨国公司在中国的投资机构、中外合资企业、国内本土大中型企业，以及其他成长性良好的发展型企业。
                            <p class="indent">我们的解决方案已协助众多客户高效地管理HR运营效力，加速HR战略转型，帮助HR运营团队从繁琐的事务性工作中解脱出来，专注于核心业务的发展，提升成本的有效性，全力协助其达成业务目标，同时降低运营风险。</p>
                        </li>
                        <li id="ys">
                            <h3 class="padding-left-25">服务优势</h3>
                            <p class="indent">为什么选择即沃？</p>
                            {{--<p class="indent"><b>连续三年，成功概率89.7%以上</b> — 超过70%的客户的Vendor中，即沃的份额是No. 1。</p>--}}
                            {{--<p class="indent"><b>百万级中高端人才库</b> — 涵盖了五十多个细分行业，囊括了上万家著名企业，能够在第一时间做出人才甄选。</p>--}}
                            <p class="indent"><b>高性价比</b> — 以互联网为工具，自主研发的业务管理系统、网络平台系统以及候选人管理系统的一体化强化了内部流程和效率的提升，降低了服务费用，给客户提供了最优的服务体验。</p>
                            <p class="indent"><b>完善的服务保障</b> — 0预付，按照结果付费，候选人解约免费替补，严格遵守商业保密契约和人才保护约束</p>
                            <p class="indent"><b>专家级顾问团队</b> — 即沃的顾问大多来自跨国公司、上市公司和大型名营企业，平均从业经验6年以上，具有广泛的人脉资源且超过七成顾问毕业于国内外知名院校。</p>
                            <p class="indent"><b>业务覆盖区域广</b> - 总部位于上海，以华东为中心，向全国覆盖，在全国拥有11个资源共享的分支机构，业务涉及遍布全国50多个城市</p>
                            <p class="indent"><b>免费管理咨询服务</b> — 为企业提供免费的选人、用人、留人、育人方案、人才测评等咨询服务，提供职业规划和发展指导</p>
                        </li>
                        <li id="lc">
                            <h3 class="padding-left-25">服务流程</h3>
                            <p class="text-center col-xs-10"><img src="/images/site/服务流程.png" alt="" class="margin-20" width="100%"></p>
                            <div class="clearfix"></div>
                            <p class="indent"><b>1、评估需求</b></p>
                            <p class="indent">通过对客户进行拜访，详细了解客户的企业文化、公司背景、行业和产品特点，与客户进行充分、有效的沟通与探讨，确定客户所需要的详细要求。</p>
                            <p class="indent"><b>2、签订服务协议 </b></p>
                            <p class="indent">双方确认合作细节后 ，共同签订即沃服务协议。</p>
                            <p class="indent"><b>3、人才甄选 </b></p>
                            <p class="indent">安排专项小组对接，根据我们对客户所处行业的深刻认识，结合具体要求，为其制订详细的寻访方案，依据寻访方案，首先进行我们庞大的人才数据库的筛选，同时进行其他渠道搜寻，全面展开寻访行动。</p>
                            <p class="indent"><b>4、人才评估</b></p>
                            <p class="indent">对所有接触到的候选人信息进行多层面、多手段的评估分析和过滤，包括候选人的现状、沟通能力、离职可能性与动机、薪酬水准等。筛选出基本符合要求的候选人，对候选人进行综合评价，撰写候选人报告推荐给客户。 </p>
                            <p class="indent"><b>5、推荐报告</b></p>
                            <p class="indent">保质保量推荐匹配候选人才。</p>
                            <p class="indent"><b>6、沟通与反馈</b></p>
                            <p class="indent">一般情况下，我们将在签约后的3－5天内将评估过的候选人综合信息提供给客户，根据客户的要求安排候选人与客户面谈，协助双方就具体聘用条件进行有效沟通、反馈和协调， 基本锁定目标人选。</p>
                            <p class="indent"><b>7、背景调查 </b></p>
                            <p class="indent">协助客户对目标人选的履历、教育、品质、业绩、能力、性格等情况进行背景调查、核实。调查内容可以是客户要求设计，也可以按即沃的固定格式。我们将提供2到3份背景调查报告内容给客户，以保证该候选人的可靠性。 </p>
                            <p class="indent"><b>8、成功签约</b></p>
                            <p class="indent">人选经过深度洽谈并获通过后，我们將协助候选人进行各项手续的办理</p>
                            <p class="indent"><b>9、后继服务及保障 </b></p>
                            <p class="indent">当客户正式签定人才以后，我们会与人才及客户保持定期联系，协助双方解决试用期期间可能遇到的困难与障碍，确保试用成功。如果该候选人由于自身的原因提出解约或没能通过试用期，我们将为客户就该需求提供免费服务。</p>
                        </li>
                        {{--<li id="bz">--}}
                            {{--<h3 class="padding-left-25">服务保障</h3>--}}
                            {{--<div class="full-width margin-bottom-30"><img src="/images/site/服务保障.png" alt="" width="100%"></div>--}}
                            {{--<p class="orange bold">结果保障：</p>--}}
                            {{--<p class="dark-gray">前期0预付，人选签约后再收取服务费。</p>--}}
                            {{--<p class="orange bold">服务保障：</p>--}}
                            {{--<p class="dark-gray">签约后3个工作日内提交首批符合要求的人才报告。</p>--}}
                            {{--<p class="orange bold">后续保障：</p>--}}
                            {{--<p class="dark-gray">签约的人选提供3个月的保证期；保证期内因候选人的原因解约，我们将继续免费服务，直到成功。</p>--}}
                            {{--<p class="orange bold">人才保护：</p>--}}
                            {{--<p class="dark-gray">签约期内，我司推荐的人选，不再推荐到其他企业。</p>--}}
                            {{--<p class="orange bold">商业保密：</p>--}}
                            {{--<p class="dark-gray">客户与我司合作期间，我方严格遵守合约规定，不向任何第三方透露涉及企业商业战略和相关保密内容。</p>--}}
                        {{--</li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @include('layout.contact')
    @include('layout.footer')
    <script src="/scripts/site/home.js"></script>
@stop