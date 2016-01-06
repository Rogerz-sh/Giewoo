@extends('layout.header')
@section('title', '即沃咨询 - 管理咨询')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper">
                <img src="/images/temp_01.jpg" alt="猎头服务" width="100%" height="300">
                <div style="position:absolute;width:100%;top:0;left:0;text-align:center;padding-top:40px;">
                </div>
            </div>
        </div>
        <div class="row margin-top-20">
            <div class="wrap">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li>管理咨询</li>
                </ul>
            </div>
        </div>
        <div class="row margin-bottom-20">
            <div class="wrap">
                <div class="col-xs-4">
                    <ul class="site-nav">
                        <li data-target="#tab1" class="active">即沃管理咨询学院</li>
                    </ul>
                </div>
                <div class="col-xs-8">
                    <ul class="site-content">
                        <li id="tab1" class="active">
                            <h3 class="padding-left-25">即沃管理咨询学院</h3>
                            <p class="indent">我们基于人才服务积累的庞大精准数据信息，为企业提供薪酬福利调研、人才配置与组织结构调研、人才管理调研、定岗与工作分析设计、能力素质模型设计、员工满意度调查等咨询服务，旨在协助企业确定战略、发些问题、提供解决方案，并提供最具价值的人才管理软件，让更多优秀人才不仅能进得来，且要用得好、留得住，更要发挥超预期的价值。</p>
                            <p class="indent">作为中国领先的中高端人才咨询服务商，我们的团队更懂得人才在企业中的角色、作用和价值，也更清楚人才对企业可能带来的风险和阻碍。截至目前，即沃咨询顾问已与超过10,000家优秀企业合作，参与70%以上决策变革，服务范围覆盖100 余个城市、50多个细分行业。</p>
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