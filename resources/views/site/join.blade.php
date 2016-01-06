@extends('layout.header')
@section('title', '即沃咨询 - 加入我们')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="wrapper">
            <div style="width:100%;height:300px;background:url('/images/top/join.jpg') no-repeat center;"></div>
        </div>
    </div>
    <div class="row margin-top-20">
        <div class="wrap">
            <ul class="breadcrumb">
                <li><a class="orange" href="/">首页</a></li>
                <li>猎头服务</li>
            </ul>
        </div>
    </div>
    <div class="row margin-bottom-20">
        <div class="wrap">
            <div class="col-xs-4">
                <ul class="site-nav">
                    <li class="active" data-target="#tab1">员工成长发展</li>
                    <li class="sub-nav-title">招聘职位</li>
                    <ul class="site-sub-nav">
                        <li data-target="#job2">顾问助理</li>
                        <li data-target="#job3">市场主管</li>
                        <li data-target="#job4">实习生</li>
                    </ul>
                </ul>
            </div>
            <div class="col-xs-8">
                <ul class="site-content">
                    <li class="active" id="tab1">
                        <h3 class="padding-left-25">员工成长发展</h3>
                        <p class="indent margin-top-20">作为专业的人才咨询服务机构，我们的员工是即沃的重要资产。我们重视每一位员工的发展及其贡献， 一直致力于为员工提供快乐且具有挑战性的工作、轻松的工作环境、完善的培训机制，以及具有竞争力的薪酬福利，从而吸引和发展更多优秀人才在即沃打造属于自己的平台和事业。</p>
                        <div class="padding-10 margin-bottom-20">
                            <div class="col-xs-12">
                                <img src="/images/join/02.jpg" alt="" width="100%">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p class="indent"><strong>职业发展路径 ：</strong></p>
                        <p class="indent">公司为员工提供至少三种职业成长通道：专家级高级顾问；项目经理／区域经理；合伙人／高级合伙人</p>
                        <p class="indent">绩效管理流程帮助员工更有效的管理职业生涯：一年四次的绩效与职业发展交流活动，为员工提供无障碍升迁平台；</p>
                        <p class="indent"><strong>员工培训：</strong></p>
                        <p class="indent">即沃提供多种培训计划，如入职培训、专业知识培训、管理技能培训、职业发展培训，员工经验分享、成长训练营等，帮助员工持续学习，快速成长，达成发展目标。</p>
                        <p class="indent"><strong>薪酬福利：</strong></p>
                        <p class="indent">加入即沃，除了具有市场竞争力的薪酬以外，您还将得到：</p>
                        <p class="indent">五险一金、 绩效奖金、培训、带薪年假 、旅游、员工关怀活动、节假日福利等</p>
                        <div class="padding-10 margin-bottom-20">
                            <div class="col-xs-12">
                                <img src="/images/join/01.jpg" alt="" width="100%">
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <p class="indent">期待你加入即沃这个不仅具有远大理想、更有执行力、有热情、有韧性的优秀组织中的一员！</p>
                        <p class="indent">简历投递：hr@giewoo.com ；</p>
                    </li>
                    <li id="job1">
                        <h3>猎头顾问</h3>
                        <p class="line-height-10 margin-top-20">
                            <strong>岗位职责：</strong><br>
                            1、与客户和候选人保持良好关系，了解熟悉人才市场动态，寻找和挖掘业务信息，进行业务拓展、客户开发；<br>
                            2、负责客户委托的招聘项目，与客户充分沟通，分析职位需求，同时客户提供一定的咨询或引导；<br>
                            3、通过各种渠道根据客户需求访寻候选人或者指导助理完成访寻工作；<br>
                            4、面试和甄选候选人，根据客户的需求和特点，推荐合适的候选人；<br>
                            5、协调安排客户面试，及时解决面试过程中遇到的问题；<br>
                            6、协调薪酬谈判和录用通知书的签署，并根据客户要求进行候选人的详细背景调查；<br>
                            7、候选人入职前中后期的跟踪，并为候选人提供相应的职业发展建议。
                        </p>
                        <p class="line-height-10 margin-top-20">
                            <strong>任职资格：</strong><br>
                            1、25-30岁，相关专业本科以上，英语良好；<br>
                            2、1年以上企业专职招聘、猎头工作经验，有人才中介证书者优先；<br>
                            3、较强的责任感，善于分析客户及人才的心理，对主要岗位的工作职责和任职要求有全面深刻理解；<br>
                            4、较强的表达能力，判断能力；<br>
                            5、工作效率高，执行力强，沟通协调力强；<br>
                            5、能承受工作压力，善于学习，良好的团队合作精神。
                        </p>
                    </li>
                    <li id="job2">
                        <h3>顾问助理</h3>
                        <p class="line-height-10 margin-top-20">
                            <strong>任职资格：</strong><br>
                            1、专科以上学历；有无经验均可，关键是要热爱人才咨询行业（我们有完善的培训）；<br>
                            2、有良好的团队合作精神,逻辑思维能力强,沟通和表达能力好；<br>
                            3、性格开朗，积极主动，责任心强，有良好的自我管理能力；<br>
                            4、能吃苦耐劳、有明确的职业目标并且靠自己的付出去实现；<br>
                            5、具有销售、服务或人力资源相关工作经验优先。
                        </p>
                    </li>
                    <li id="job3">
                        <h3>市场主管</h3>
                        <p class="line-height-10 margin-top-20">
                            <strong>岗位职责：</strong><br>
                            1、负责公司的网站推广和网络营销管理工作，分配、监督和考核部门成员的日常工作；<br>
                            2、定期统计、分析及评估网络推广销售效果，并给出针对性的改进调整方案；<br>
                            3、不断开拓互联网市场推广渠道，建立有效的推广渠道，深入挖掘潜在资源，进行深度合作；<br>
                            4、负责网站对外合作内容资源的策划、整合和推广，利用各种资源提高网站知名度和业务量。
                        </p>
                        <p class="line-height-10 margin-top-20">
                            <strong>任职资格：</strong><br>
                            1、大专学历以上，电子商务，市场营销等相关专业；<br>
                            2、两年以上网络营销工作经验，具备丰富的网络运营和网络推广经验；<br>
                            3、熟悉多种网络推广手段，如：搜索引擎（SEO、SEM）、论坛、博客、QQ群、邮件、SNS软文、微博微信、广告投放等推广，同时懂得网络公关、网络活动、新闻营销、事件营销、口碑营销等推广策略，能熟练应用推广策略指导团队成员开展工作；<br>
                            4、具有敏锐的市场洞察力、网络营销创意能力；<br>
                            5、具备较强责任感、组织能力、沟通能力以及富有创意和开拓进取的精神。
                        </p>
                    </li>
                    <li id="job4">
                        <h3>实习生</h3>
                        <p class="line-height-10 margin-top-20">
                            <strong>任职资格：</strong><br>
                            1. 我们需要具有快速学习能力，人际沟通能力、目标感知能力、抗挫折能力和工作积极主动的有志者加入；<br>
                            2. 我们需要具有清晰的自我定位和长远的职业规划的有志者加入；<br>
                            3. 我们需要性格外向，富有激情，对工作和生活有由衷的强烈的热爱；<br>
                            4.我们需要具有强烈的责任心、高尚的职业道德、强烈的集体荣誉感和团队协作精神；<br>
                            5. 大专以上学历，专业不限。
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
@include('layout.contact')
@include('layout.footer')
<script src="/scripts/site/home.js"></script>
@stop