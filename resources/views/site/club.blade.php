@extends('layout.header')
@section('title', '即沃咨询 - 俱乐部')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper">
                <div style="width:100%;height:300px;background:url('/images/top/club.jpg') no-repeat center;"></div>
            </div>
        </div>
        <div class="row margin-top-20">
            <div class="wrap">
                <ul class="breadcrumb">
                    <li><a class="orange" href="/">首页</a></li>
                    <li>俱乐部</li>
                </ul>
            </div>
        </div>
        <div class="row margin-bottom-20">
            <div class="wrap">
                <div class="col-xs-4">
                    <ul class="site-nav">
                        <li data-target="#club" class="active">俱乐部的服务</li>
                    </ul>
                </div>
                <div class="col-xs-8">
                    <ul class="site-content">
                        <li class="active" id="club">
                            <h3 class="padding-left-25">俱乐部的服务</h3>
                            <p class="indent line-height-10"><strong>精英酒会：</strong>有机会参加年底精英酒会，结识业界高层人物及社会名流、政府官员，寻找知已，共创伟业。获得免费企业及个人合作项目接洽。</p>

                            <p class="indent line-height-10"><strong>精英沙龙：</strong>免费参加俱乐部组织的各种主题沙龙活动(每二月一期)，获得广泛结识行业精英的机会</p>

                            <p class="indent line-height-10"><strong>精英卡：</strong>免费获赠精英卡，上海酒吧\餐饮\娱乐\购物会员消费优惠打折。</p>

                            <p class="indent line-height-10"><strong>精英风采：</strong>获得网站及《即沃精英》会刊免费宣传、风采展示的机会。</p>

                            <p class="indent line-height-10"><strong>职业培训：</strong>免费参加即沃咨询组织举办的各类高级职业培训讲座。</p>

                            <p class="indent line-height-10"><strong>休闲娱乐：</strong>参加俱乐部举办的联谊舞会、交友约会、休闲活动。</p>
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