<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>即沃咨询－中国领先的猎头服务机构｜全国服务热线400-670-7725</title>
    <meta name="_token" content="{{csrf_token()}}">
    <meta property="qc:admins" content="311237732767157776375" />
    <meta name="keywords" content="猎头公司，猎头招聘，最好的猎头公司，上海猎头网">
    <meta name="description" content="专注于中高端人才招聘，上海猎头公司中排名前十。在金融、互联网、房地产、制造、环保、能源、汽车、消费品行业中猎头招聘服务遥遥领先。">
    <link rel="apple-touch-icon" href="/favicon.png">
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/new-page/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/new-page/css/large.css">
    <link rel="stylesheet" type="text/css" href="/new-page/css/video.css">
    <link rel="stylesheet" type="text/css" href="/new-page/css/tpl.css"/>
    <link rel="stylesheet" type="text/css" href="/new-page/css/style.css"/>
</head>
<body>
    <!--<div class="loading">-->
        <!--<img src="/new-page/image/loading.gif"/>-->
    <!--</div>-->
    <div id="side-tools">
        <ul>
            <li class="v-align side-tools-click opener"><div><i class="fa fa-comment fa-2x"></i><br>咨询</div></li>
            <li class="v-align side-tools-handler">
                <div><i class="fa fa-phone fa-2x"></i><br><span>热线</span></div>
                <div class="side-tools-hide width-160">
                    <div class="padding-10 text-center white line-height-10">
                        <span>24小时免费咨询热线</span>
                        <br><span class="font-120">400-670-7725</span>
                        <br><span>总机：021-61194048</span>
                    </div>
                </div>
            </li>
            <li class="v-align side-tools-top" onclick="javascript:document.body.scrollIntoView();"><div><i class="fa fa-chevron-up fa-2x"></i></div></li>
        </ul>
    </div>

    <div id="giewoo">
        <!--导航-->
        <div class="topBar">
            <a href="/"><img class="logo" src="/new-page/image/logo_g.png" alt="即沃咨询"/></a>
        </div>
        <div class="menu">
            <i class="icon-menu"></i>
            <ul class="clear">
                <li><a data-area="us" href="javascript:void(0);">我们</a></li>
                <li><a data-area="article" href="javascript:void(0);">资讯</a></li>
                <li><a data-area="server" href="javascript:void(0);">服务</a></li>
                <li><a data-area="team" href="javascript:void(0);">团队</a></li>
                <li><a data-area="join" href="javascript:void(0);">加入</a></li>
            </ul>
        </div>

        <!--第1屏，视频-->
        <div id="home" class="min section">
            <div id="index" class="min">
                <video autoplay loop poster="/new-page/image/movie.jpg" class="video">
                    <source src="/new-page/image/giewoo2.m4v" type="video/mp4">
                </video>
                <div id="poster" class="video poster" style="display: none;"></div>
                <i class="mesh"></i>
                <!--<p class="iconDown"><a data-area="us" class="moveDown" href="javascript:void(0);"><img src="/new-page/image/icon-arrow-down.png"/></a></p>-->
                <img class="bigLogo" src="/new-page/image/home_logo_bg.png"/>
                <div class="flash">
                    <i class="t1"><img src="/new-page/image/home_txt_a.png"/></i>
                </div>
            </div>
        </div>

        <!--第2屏，我们-->
        <div id="us" class="min section">
            <div id="banner">
                <ul>
                    <li class="padding-left-10 padding-right-10">
                    <?php $index = 0 ?>
                    @foreach($banner as $data)
                            <a href="/example/{{$data->id}}" target="_blank"><span>{{date('Y-m-d', strtotime($data->publish))}} {{$data->work_area}} {{$data->job_name}} 入职成功 年薪{{$data->salary}}万</span></a>
                        <?php $index += 1 ?>
                        @if($index % 3 == 0)</li><li>@endif
                    @endforeach
                    </li>
                </ul>
            </div>
            <h1 class="navTitle navUs">我们<small>Who are we?</small></h1>
            <div class="about min">
                <div class="usHead max">
                    <ul class="clear">
                        <li><label>即沃文化<i>Giewoo Culture</i></label></li>
                        <li class="on"><label>即沃简介<i>Giewoo Introduction</i></label></li>
                        <li><label>即沃优势<i>Giewoo Advantage</i></label></li>
                    </ul>
                    <i class="line"></i>
                </div>
                <div class="usBox">
                    <div class="aContainer">
                        <div data-index="0" class="culture item">
                            <div class="content max">
                                <p class="font-lg margin-top-20"><b>我们的愿景：</b><small>致力成为一家卓越的猎头机构。它是行业的领导者，客户最信赖的伙伴，员工实现价值的舞台。</small></p>
                                <p class="font-lg"><b>我们的使命：</b><small>聚焦客户关注的招聘效率和质量，提供更有竞争力的人才解决方案，持续为客户创造最大价值；</small></p>
                                <p class="font-lg"><b>我们的价值观：</b><small>简单 信任；协作 共赢；梦想 超越</small></p>
                                <a class="view opener" href="javascript:;">了解更多</a>
                            </div>
                            <div class="pics">
                                <div id="culturePics" class="picBox">
                                    <ul class="clear">
                                        <li><img src="/new-page/image/us/u02.jpg"/></li>
                                        <li><img src="/new-page/image/us/u04.jpg"/></li>
                                        <li><img src="/new-page/image/us/u06.jpg"/></li>
                                        <li><img src="/new-page/image/us/u07.jpg"/></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div data-index="1" class="information item">
                            <div class="content max">
                                    即沃，中国领先的猎头服务机构，一站式招聘职位解决方案的提供商。 <br>
                                    即沃咨询自2008年在香港设立了猎头业务以来，严格按照国际惯例及市场规则，以猎头公司NO.1为目标，持续为客户提供着一流的招聘服务。即沃猎头以上海为中心，辐射全国做业务。随着猎头业务的跨越式发展，经营规模的不断壮大，先后在中国的香港、上海、广州、杭州、苏州、青岛、成都、长沙等地设有办事机构，进一步完善了即沃中国地区中高级人才平台化的建设，强化了提供中高端人才的资源整合能力。<a data-title="即沃介绍" data-src="/new-page/tpl/intro.html" class="load" href="javascript:void(0);">[查看详细]</a>

                                <a class="view opener" href="javascript:;">了解更多</a>
                            </div>
                            <div class="pics">
                                <div id="informationPics" class="picBox">
                                    <ul class="clear">
                                        <li><img src="/new-page/image/us/u01.jpg"/></li>
                                        <li><img src="/new-page/image/us/u08.jpg"/></li>
                                        <li><img src="/new-page/image/us/u03.jpg"/></li>
                                        <li><img src="/new-page/image/us/bradley.png"/></li>
                                        <li class="ceo">
                                            <h3 class="margin-bottom-5"><b>Bradley：</b>高级合伙人</h3>
                                            <p>开普敦大学硕士学位。在知名投行、外资上市公司担任高层管理，并且拥有超过十年的高端人才招聘经验。在Bradley的带领下，即沃加强了与世界500强公司之间的猎头合作，为客户引进了包括总经理、投资副总裁，营销副总、CFO、战略总经理等高端优秀人才、从而有力地推动了他们在中国地区的业务发展。</p>
                                        </li>
                                        <li><img src="/new-page/image/us/chris.png"/></li>
                                        <li class="ceo">
                                            <h3 class="margin-bottom-5"><b>Chris：</b>高级合伙人</h3>
                                            <p>慕尼黑大学硕士学位。曾在全球著名的管理咨询公司担任高层管理，擅长为客户提供人力资源战略解决方案。作为即沃咨询香港总经理，Chris推动了公司业务的快速成长。从香港到国内开设了10多个分支机构，已有超过3000家国内外知名企业选择即沃作为人才战略合作伙伴。</p>
                                        </li>
                                        <li><img src="/new-page/image/us/u05.jpg"/></li>
                                        <li><img src="/new-page/image/us/u09.jpg"/></li>
                                        <li><img src="/new-page/image/us/u10.png"/></li>
                                    </ul>
                                </div>
                                <p class="picBtn">
                                    <a class="btnPrev" href="javascript:void(0);">上切</a>
                                    <a class="btnNext" href="javascript:void(0);">下切</a>
                                </p>
                                <i class="l layer"></i>
                                <i class="r layer"></i>
                            </div>
                        </div>
                        <div data-index="2" class="honor item">
                            <div class="content max">
                                <div class="advBg">
                                    <ul class="advList">
                                        <li><br><b class="red">2,000,000+</b><br>精英人才库<br><br><br>囊括50个细分行业<br>上万家著名企业</li>
                                        <li><br><b class="red">30000+</b><br>中高端成功案例<br><br><br>推荐平均成功率90.1%</li>
                                        <li><br><b class="red">200+</b><br>专家级行业顾问<br><br><br>7*24小时快速响应<br>一对一专业服务</li>
                                        <li><br><b class="red">20+</b><br>全国分支<br><br><br>18个城市<br>23家分支</li>
                                        <li><br><b class="red">0预付</b><br>对结果负责<br><br><br>签约后不成功0费用</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="btns">
                    <a class="prev t1" href="javascript:void(0);">上切</a>
                    <a class="next t2" href="javascript:void(0);">下切</a>
                </div>
            </div>
            <div class="partners">
                <div class="pContainer max">
                    <h3 class="itemNav"><label>合作单位<small>Giewoo Partners</small></label><i></i></h3>
                    <p>
                        {{--<a href="javascript:;"><img src="/new-page/image/custom/c01.jpg" width="140" height="60"/></a>--}}
                        {{--<a href="javascript:;"><img src="/new-page/image/custom/c02.png" width="140" height="60"/></a>--}}
                        <a href="javascript:;"><img src="/new-page/image/custom/c03.png" width="140" height="60"/></a>
                        <a href="javascript:;"><img src="/new-page/image/custom/c04.png" width="140" height="60"/></a>
                        <a href="javascript:;"><img src="/new-page/image/custom/c05.png" width="140" height="60"/></a>
                        <a href="javascript:;"><img src="/new-page/image/custom/c06.png" width="140" height="60"/></a>
                        <a href="javascript:;"><img src="/new-page/image/custom/c07.png" width="140" height="60"/></a>
                        <a href="javascript:;"><img src="/new-page/image/custom/c08.png" width="140" height="60"/></a>
                        {{--<a href="javascript:;"><img src="/new-page/image/custom/c09.png" width="140" height="60"/></a>--}}
                        <a href="javascript:;"><img src="/new-page/image/custom/c10.png" width="140" height="60"/></a>
                        {{--<a href="javascript:;"><img src="/new-page/image/custom/c11.png" width="140" height="60"/></a>--}}
                        {{--<a href="javascript:;"><img src="/new-page/image/custom/c12.png" width="140" height="60"/></a>--}}
                        {{--<a href="javascript:;"><img src="/new-page/image/custom/c13.png" width="140" height="60"/></a>--}}
                        {{--<a href="javascript:;"><img src="/new-page/image/custom/c14.png" width="140" height="60"/></a>--}}
                        <a href="javascript:;"><img src="/new-page/image/custom/c15.png" width="140" height="60"/></a>
                        <a href="javascript:;"><img src="/new-page/image/custom/c16.png" width="140" height="60"/></a>
                        <a href="javascript:;"><img src="/new-page/image/custom/c17.png" width="140" height="60"/></a>
                        <a href="javascript:;"><img src="/new-page/image/custom/c18.png" width="140" height="60"/></a>
                        <a href="javascript:;"><img src="/new-page/image/custom/c19.png" width="140" height="60"/></a>
                        <a href="javascript:;"><img src="/new-page/image/custom/c20.png" width="140" height="60"/></a>
                        <a href="javascript:;"><img src="/new-page/image/custom/c21.png" width="140" height="60"/></a>
                    </p>
                </div>
                <div class="partners-text max">
                    <div class="flex">
                        <div class="f1">
                            <span class="big">5000<small>+</small></span>
                            <span>企业选择和我们合作</span><br>
                            <a class="p-btn opener" href="javascript:;">查询合作</a>
                        </div>
                        <div class="f1">
                            <span class="big">10000<small>+</small></span>
                            <span>中高端职位成功入职</span><br>
                            <a class="p-btn" href="/examples" target="_blank">查询案例</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--第3屏，服务-->
        <div id="join" class="min section">
            <h1 class="navTitle navJoin">服务<small>Our Services</small></h1>
            <div class="join min">
                <div class="usHead max">
                    <ul class="clear">
                        <li><label>服务流程<i>Service Flow</i></label></li>
                        <li class="on"><label>成功案例<i>Successful Cases</i></label></li>
                        <li><label>增值服务<i>Value-added Services</i></label></li>
                    </ul>
                    <i class="line"></i>
                </div>
                <div class="usBox">
                    <div class="aContainer">
                        <div data-index="0" class="culture item">
                            <div class="content max">
                                <div class="newpc_3">
                                    <div class="newpc_3_c">
                                        <div class="newpc_3_center">
                                            <div class="newpc_3_pane" style="display:block;">
                                                <ul>
                                                    <li class="newpc_3_center_li1">
                                                        <h2>评估需求</h2>
                                                        <div class="circle"></div>
                                                        <em class="qy_tb1"></em>
                                                        <h3>1小时内评估需求</h3>
                                                    </li>

                                                    <li class="newpc_3_center_li2">
                                                        <em class="qy_tb2"></em>
                                                        <div class="circle"></div>
                                                        <h2>签约合作</h2>
                                                        <h3>签约合作</h3>
                                                    </li>

                                                    <li class="newpc_3_center_li3">
                                                        <h2>快速推荐</h2>
                                                        <div class="circle"></div>
                                                        <em class="qy_tb3"></em>
                                                        <h3>3天内快速推荐</h3>
                                                    </li>

                                                    <li class="newpc_3_center_li4">
                                                        <em class="qy_tb4"></em>
                                                        <div class="circle"></div>
                                                        <h2>安排面试</h2>
                                                        <h3>1周内安排面试</h3>
                                                    </li>

                                                    <li class="newpc_3_center_li5">
                                                        <h2>推荐成功</h2>
                                                        <div class="circle"></div>
                                                        <em class="qy_tb5"></em>
                                                        <h3>平均20天推荐成功</h3>
                                                    </li>

                                                    <li class="newpc_3_center_li6">
                                                        <em class="qy_tb6"></em>
                                                        <div class="circle"></div>
                                                        <h2>跟进维护</h2>
                                                        <h3>3个月内持续跟进维护</h3>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-index="1" class="information item">
                            <div class="content max">
                                <div class="cases">
                                    <ul class="c-side">
                                        <li class="active">IT•互联网</li>
                                        <li>金融</li>
                                        <li>通信•电子•硬件</li>
                                        <li>房地产•建筑•建材</li>
                                        <li>汽车•机械制造</li>
                                        <li>文化•旅游•健康</li>
                                        <li>消费品</li>
                                        <li>化工•环保•能源</li>
                                        <li>广告•传媒•教育</li>
                                        <li>物流•贸易•物流</li>
                                    </ul>
                                    <div class="c-main">
                                        <div class="c-content active">
                                            <div class="c-title">
                                                <h3>IT•互联网</h3>
                                                <small>IT & Internet</small>
                                            </div>
                                            <p class="margin-top-10">
                                                <b>行业细分：</b>
                                                <span>门户</span>
                                                <span>电子商务</span>
                                                <span>新媒体</span>
                                                <span>网游</span>
                                                <span>搜索</span>
                                                <span>视频</span>
                                                <span>商业资讯</span>
                                                <span>软件开发</span>
                                                <span>硬件开发</span>
                                                <span>交易支付</span>
                                                <span>团购</span>
                                                <span>IT服务</span>
                                                <span>IT咨询</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>成功案例：</b>
                                                <span>集团公司副总裁</span>
                                                <span>技术总监／经理</span>
                                                <span>架构师</span>
                                                <span>产品总监／经理</span>
                                                <span>设计总监</span>
                                                <span>运营总监／经理</span>
                                                <span>市场总监／经理</span>
                                                <span>市场推广经理</span>
                                                <span>游戏策划</span>
                                                <span>数据分析经理</span>
                                                <span>项目经理</span>
                                                <span>电商经理</span>
                                                <span>用户研究经理</span>
                                                <span>新媒体运营</span>
                                                <span>ui设计师</span>
                                                <span>交互设计师</span>
                                                <span>java设计师</span>
                                                <span>php设计师</span>
                                                <span>.net开发工程师</span>
                                                <span>前端开发</span>
                                                <span>移动开发</span>
                                                <span>算法工程师</span>
                                                <span>数据挖掘工程师</span>
                                                <span>系统运维工程师</span>
                                                <span>销售总监</span>
                                                <span>客户中心总监／经理</span>
                                                <span>...</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>知名客户：</b>
                                                <img src="/new-page/image/example/it互联网/百度.png" alt="百度" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/九游.png" alt="九游" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/巨人网络.png" alt="巨人网络" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/麦网.png" alt="麦网" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/美丽说.png" alt="美丽说" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/泰科思.png" alt="泰科思" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/新浪.png" alt="新浪" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/因特尔.png" alt="因特尔" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/金蝶.png" alt="金蝶" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/麦克菲.png" alt="麦克菲" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/美团.png" alt="美团" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/世纪天成.png" alt="世纪天成" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/米卓.png" alt="米卓" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/赛尔.png" alt="赛尔" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/图片1.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/图片2.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/图片3.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/it互联网/图片4.png" alt="" height="30" class="bordered border-color-gray">
                                            </p>
                                        </div>
                                        <div class="c-content">
                                            <div class="c-title">
                                                <h3>金融</h3>
                                                <small>Finance</small>
                                            </div>
                                            <p class="margin-top-10">
                                                <b>行业细分：</b>
                                                <span>银行</span>
                                                <span>基金</span>
                                                <span>证券</span>
                                                <span>期货</span>
                                                <span>保险</span>
                                                <span>风投／私募</span>
                                                <span>金融服务／金融投资</span>
                                                <span>资产管理</span>
                                                <span>互联网金融</span>
                                                <span>融资租赁</span>
                                                <span>金融信息服务</span>
                                                <span>会计/审计师事务所</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>成功案例：</b>
                                                <span>集团公司副总裁</span>
                                                <span>投资银行总经理</span>
                                                <span>分行行长／副行长</span>
                                                <span>高级副总裁</span>
                                                <span>技术总监</span>
                                                <span>融资租赁总监</span>
                                                <span>大区总经理</span>
                                                <span>董事</span>
                                                <span>资产管理总经理</span>
                                                <span>投资总监／经理</span>
                                                <span>风控总监／经理</span>
                                                <span>城市经理</span>
                                                <span>银行大客户经理</span>
                                                <span>基金经理</span>
                                                <span>理财经理</span>
                                                <span>产品经理</span>
                                                <span>保险精算师</span>
                                                <span>高级金融分析师</span>
                                                <span>研发工程师</span>
                                                <span>理赔部经理</span>
                                                <span>催款经理</span>
                                                <span>营业部经理</span>
                                                <span>招聘经理</span>
                                                <span>人力资源总监／经理</span>
                                                <span>融资总监／经理</span>
                                                <span>数据分析经理</span>
                                                <span>...</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>知名客户：</b>
                                                <img src="/new-page/image/example/金融/安邦保险.png" alt="安邦保险" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/红岭创投.png" alt="红岭创投" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/花旗银行.png" alt="花旗银行" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/汇丰银行.png" alt="汇丰银行" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/拍拍贷.png" alt="拍拍贷" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/浦发银行.png" alt="浦发银行" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/人人贷.png" alt="人人贷" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/网贷之家.png" alt="网贷之家" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/陆金所.png" alt="陆金所" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/蚂蚁金服.png" alt="蚂蚁金服" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/国泰君安证券.png" alt="国泰君安证券" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/德丰杰.png" alt="德丰杰" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/中诚信托.png" alt="中诚信托" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/中国华融.png" alt="中国华融" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/中国平安.png" alt="中国平安" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/ppmoney.png" alt="ppmoney" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/图片 1.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/图片 2.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/图片 3.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/金融/图片 4.png" alt="" height="30" class="bordered border-color-gray">
                                            </p>
                                        </div>
                                        <div class="c-content">
                                            <div class="c-title">
                                                <h3>通信•电子•硬件</h3>
                                                <small>Communication & Electronics & Hardware</small>
                                            </div>
                                            <p class="margin-top-10">
                                                <b>行业细分：</b>
                                                <span>电子技术</span>
                                                <span>半导体</span>
                                                <span>集成电路</span>
                                                <span>通讯设备</span>
                                                <span>通讯运营</span>
                                                <span>移动产品</span>
                                                <span>服务商</span>
                                                <span>计算机硬件</span>
                                                <span>网络设备</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>成功案例：</b>
                                                <span>总经理</span>
                                                <span>销售总监／经理</span>
                                                <span>产品总监</span>
                                                <span>市场总监</span>
                                                <span>人力资源总监／经理</span>
                                                <span>技术总监</span>
                                                <span>系统架构师</span>
                                                <span>大数据平台开发</span>
                                                <span>高级UED</span>
                                                <span>H5开发工程师销售工程师</span>
                                                <span>项目经理</span>
                                                <span>数据库工程师</span>
                                                <span>运营经理</span>
                                                <span>高级行业销售</span>
                                                <span>标签产品销售工程师</span>
                                                <span>系统集成销售工程师</span>
                                                <span>办事处经理</span>
                                                <span>物理层高级/资深算法软件工程师</span>
                                                <span>国家级实验室管理专员</span>
                                                <span>视频/图像处理专家</span>
                                                <span>U3D</span>
                                                <span>高级射频工程师</span>
                                                <span>...</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>知名客户：</b>
                                                <img src="/new-page/image/example/通信电子硬件/图片 1.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/图片 2.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/图片 3.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/图片 4.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/图片 5.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/图片 6.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/图片 7.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/图片 8.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/10.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/图片 9.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/11.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/12.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/13.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/14.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/15.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/通信电子硬件/16.png" alt="" height="30" class="bordered border-color-gray">
                                            </p>
                                        </div>
                                        <div class="c-content">
                                            <div class="c-title">
                                                <h3>房地产•建筑•建材</h3>
                                                <small>RealEstate & Architecture & Material</small>
                                            </div>
                                            <p class="margin-top-10">
                                                <b>行业细分：</b>
                                                <span>房地产开发</span>
                                                <span>建筑</span>
                                                <span>建材</span>
                                                <span>工程规划/设计/装潢</span>
                                                <span>房地产服务（物业管理/地产经纪）</span>
                                                <span>房产中介/咨询/评估</span>
                                                <span>设计/装修公司</span>
                                                <span>交通基建</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>成功案例：</b>
                                                <span>执行总裁</span>
                                                <span>营销副总裁／总监</span>
                                                <span>设计副总裁／总监</span>
                                                <span>总建筑师</span>
                                                <span>商业管理公司总经理</span>
                                                <span>项目总经理</span>
                                                <span>工程总监</span>
                                                <span>商务总监／经理</span>
                                                <span>成本总监／经理</span>
                                                <span>造价经理</span>
                                                <span>招商总监／经理</span>
                                                <span>采购经理</span>
                                                <span>测量部经理</span>
                                                <span>项目经理</span>
                                                <span>策划经理</span>
                                                <span>园林／景观设计经理</span>
                                                <span>高级建筑工程师</span>
                                                <span>造价工程师</span>
                                                <span>销售总监</span>
                                                <span>大区销售经理</span>
                                                <span>策划总监／经理</span>
                                                <span>财务总监／经理</span>
                                                <span>投资总监／经理</span>
                                                <span>发展部总监</span>
                                                <span>投资关系经理</span>
                                                <span>...</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>知名客户：</b>
                                                <img src="/new-page/image/example/房地产建筑/宝龙地产.png" alt="宝龙地产" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/高力.png" alt="高力" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/华润置地.png" alt="华润置地" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/绿地地产.png" alt="绿地地产" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/首都开发股份.png" alt="首都开发股份" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/万科.png" alt="万科" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/新城控股.png" alt="新城控股" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/中粮地产.png" alt="中粮地产" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/1.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/2.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/3.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/4.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/5.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/6.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/7.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/8.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/9.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/10.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/房地产建筑/11.png" alt="" height="30" class="bordered border-color-gray">
                                            </p>
                                        </div>
                                        <div class="c-content">
                                            <div class="c-title">
                                                <h3>汽车•机械制造</h3>
                                                <small>Auto & Machine MFG</small>
                                            </div>
                                            <p class="margin-top-10">
                                                <b>行业细分：</b>
                                                <span>汽车/摩托车</span>
                                                <span>机械制造/机电/重工</span>
                                                <span>印刷/包装/造纸</span>
                                                <span>原材料及加工</span>
                                                <span>仪器/仪表</span>
                                                <span>工业自动化</span>
                                                <span>电气</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>成功案例：</b>
                                                <span>总经理</span>
                                                <span>生产副总</span>
                                                <span>厂长</span>
                                                <span>4s店总经理</span>
                                                <span>技术总监</span>
                                                <span>采购总监</span>
                                                <span>供应链总监</span>
                                                <span>研发部长</span>
                                                <span>质量总监／经理</span>
                                                <span>EHS经理</span>
                                                <span>项目管理</span>
                                                <span>外贸经理</span>
                                                <span>销售经理</span>
                                                <span>电商销售</span>
                                                <span>市场经理</span>
                                                <span>服务经理</span>
                                                <span>工艺设计主管</span>
                                                <span>模具工程师</span>
                                                <span>系统工程师</span>
                                                <span>机器人设计</span>
                                                <span>底盘工程师</span>
                                                <span>动力总成工程师</span>
                                                <span>体系／认证工程师</span>
                                                <span>IC设计工程师</span>
                                                <span>NPI项目工程师</span>
                                                <span>高级运营经理</span>
                                                <span>战略研究经理</span>
                                                <span>高级国际项目经理</span>
                                                <span>...</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>知名客户：</b>
                                                <img src="/new-page/image/example/机械制造汽车/北大先锋.png" alt="北大先锋" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/方正电机.png" alt="方正电机" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/吉利.png" alt="吉利" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/首汽集团.png" alt="首汽集团" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/徐工集团.png" alt="徐工集团" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/银河表计.png" alt="银河表计" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/中联重科.png" alt="中联重科" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/SK电讯.png" alt="SK电讯" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/1.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/2.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/3.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/4.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/5.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/6.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/7.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/8.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/机械制造汽车/9.png" alt="" height="30" class="bordered border-color-gray">
                                            </p>
                                        </div>
                                        <div class="c-content">
                                            <div class="c-title">
                                                <h3>文化•旅游•健康</h3>
                                                <small>Culture & Tourism & Healthy</small>
                                            </div>
                                            <p class="margin-top-10">
                                                <b>行业细分：</b>
                                                <span>文化创意</span>
                                                <span>文化遗产</span>
                                                <span>影视／音像／艺术／出版</span>
                                                <span>体育</span>
                                                <span>旅游</span>
                                                <span>养老／健康</span>
                                                <span>疗养院</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>成功案例：</b>
                                                <span>养老事业部总经理</span>
                                                <span>旅游事业部总经理</span>
                                                <span>农业总裁</span>
                                                <span>度假酒店总经理</span>
                                                <span>运营总监</span>
                                                <span>投资总监</span>
                                                <span>市场总监</span>
                                                <span>区域品牌总监</span>
                                                <span>养老产品设计总监</span>
                                                <span>会所管理</span>
                                                <span>会员总监／经理</span>
                                                <span>医疗经理</span>
                                                <span>养老院长</span>
                                                <span>旅游部经理</span>
                                                <span>艺术电商部经理</span>
                                                <span>招商部长</span>
                                                <span>项目经理</span>
                                                <span>策划经理</span>
                                                <span>需求分析师</span>
                                                <span>架构师</span>
                                                <span>影院总经理</span>
                                                <span>项目开发总监版权增值总监（衍生品）</span>
                                                <span>平面设计经理</span>
                                                <span>经纪人</span>
                                                <span>店长</span>
                                                <span>...</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>知名客户：</b>
                                                <img src="/new-page/image/example/文化养老旅游/39健康.png" alt="39健康" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/遨游网.png" alt="遨游网" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/博集天卷.png" alt="博集天卷" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/富迪健康.png" alt="富迪健康" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/汉藏文化.png" alt="汉藏文化" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/乐视影业.png" alt="乐视影业" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/驴妈妈.png" alt="驴妈妈" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/咪咕文化.png" alt="咪咕文化" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/泰福健康.png" alt="泰福健康" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/天舟文化.png" alt="天舟文化" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/途牛.png" alt="途牛" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/携程.png" alt="携程" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/雅昌文化.png" alt="雅昌文化" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/caeg.png" alt="caeg" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/文化养老旅游/长江养老.png" alt="长江养老" height="30" class="bordered border-color-gray">
                                            </p>
                                        </div>
                                        <div class="c-content">
                                            <div class="c-title">
                                                <h3>消费品</h3>
                                                <small>Consumption</small>
                                            </div>
                                            <p class="margin-top-10">
                                                <b>行业细分：</b>
                                                <span>食品</span>
                                                <span>饮料</span>
                                                <span>日用洗化</span>
                                                <span>服装</span>
                                                <span>奢侈品</span>
                                                <span>电器</span>
                                                <span>办公用品</span>
                                                <span>零售／连锁</span>
                                                <span>酒水</span>
                                                <span>鞋业</span>
                                                <span>箱包</span>
                                                <span>家居／家具／家纺</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>成功案例：</b>
                                                <span>首席执行官</span>
                                                <span>分公司总经理</span>
                                                <span>营销副总</span>
                                                <span>销售总监</span>
                                                <span>市场总监</span>
                                                <span>品牌总监</span>
                                                <span>厂长</span>
                                                <span>生产总监</span>
                                                <span>渠道总监／经理</span>
                                                <span>电商管理</span>
                                                <span>经销商管理</span>
                                                <span>直销经理</span>
                                                <span>KA经理</span>
                                                <span>设计经理／设计师</span>
                                                <span>产品经理</span>
                                                <span>公关经理</span>
                                                <span>拓展经理</span>
                                                <span>销售经理</span>
                                                <span>零售经理</span>
                                                <span>淘宝／天猫店长</span>
                                                <span>数据分析师</span>
                                                <span>开发工程师</span>
                                                <span>系统实施主管</span>
                                                <span>技术主管</span>
                                                <span>买手</span>
                                                <span>店长</span>
                                                <span>...</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>知名客户：</b>
                                                <img src="/new-page/image/example/消费品/阿迪达斯.png" alt="阿迪达斯" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/百事.png" alt="百事" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/家乐福.png" alt="家乐福" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/乐购.png" alt="乐购" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/苏宁易购.png" alt="苏宁易购" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/统一企业.png" alt="统一企业" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/周大福.png" alt="周大福" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/PRADA.png" alt="PRADA" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/1.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/2.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/3.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/4.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/5.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/6.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/7.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/8.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/消费品/9.png" alt="" height="30" class="bordered border-color-gray">
                                            </p>
                                        </div>
                                        <div class="c-content">
                                            <div class="c-title">
                                                <h3>化工•环保•能源</h3>
                                                <small>Chemical & Environment & Energy</small>
                                            </div>
                                            <p class="margin-top-10">
                                                <b>行业细分：</b>
                                                <span>化工</span>
                                                <span>新能源</span>
                                                <span>节能设备</span>
                                                <span>污水处理</span>
                                                <span>环保</span>
                                                <span>电力</span>
                                                <span>采掘</span>
                                                <span>冶炼</span>
                                                <span>矿产</span>
                                                <span>饮用水净化</span>
                                                <span>电力施工</span>
                                                <span>输配电系统</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>成功案例：</b>
                                                <span>总经理</span>
                                                <span>营销总监</span>
                                                <span>采购总监</span>
                                                <span>大区销售经理</span>
                                                <span>研发工程师</span>
                                                <span>总工程师</span>
                                                <span>软件工程师</span>
                                                <span>环评工程师</span>
                                                <span>项目经理</span>
                                                <span>公关经理</span>
                                                <span>生产经理</span>
                                                <span>财务经理</span>
                                                <span>技术工程师</span>
                                                <span>研究院院长</span>
                                                <span>注塑主管</span>
                                                <span>设计总监</span>
                                                <span>商务经理</span>
                                                <span>市场总监</span>
                                                <span>产品总监</span>
                                                <span>省区经理</span>
                                                <span>培训经理</span>
                                                <span>招聘经理</span>
                                                <span>审计经理</span>
                                                <span>工程漆部长</span>
                                                <span>资讯科技经理</span>
                                                <span>硬件设施经理</span>
                                                <span>NPSH-PC-技术服务工程师（国际项目）</span>
                                                <span>...</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>知名客户：</b>
                                                <img src="/new-page/image/example/化工环保能源/1.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/2.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/3.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/4.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/5.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/6.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/7.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/8.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/9.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/10.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/11.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/12.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/13.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/14.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/15.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/16.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/化工环保能源/17.png" alt="" height="30" class="bordered border-color-gray">

                                            </p>
                                        </div>
                                        <div class="c-content">
                                            <div class="c-title">
                                                <h3>广告•传媒•教育</h3>
                                                <small>AD & Media & Education</small>
                                            </div>
                                            <p class="margin-top-10">
                                                <b>行业细分：</b>
                                                <span>广告创意与设计</span>
                                                <span>广告代理</span>
                                                <span>活动策划</span>
                                                <span>整合传播</span>
                                                <span>新闻</span>
                                                <span>杂志</span>
                                                <span>企业内训</span>
                                                <span>教育机构</span>
                                                <span>早教／幼儿教育</span>
                                                <span>外语培训</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>成功案例：</b>
                                                <span>策划总监</span>
                                                <span>战略总监</span>
                                                <span>创意总监</span>
                                                <span>品牌总监</span>
                                                <span>媒介总监</span>
                                                <span>新媒体运营总监</span>
                                                <span>项目总监</span>
                                                <span>大客户总监／经理</span>
                                                <span>广告销售经理</span>
                                                <span>会展经理</span>
                                                <span>文案策划经理</span>
                                                <span>赛事资源管理</span>
                                                <span>地推经理</span>
                                                <span>教务管理</span>
                                                <span>资深顾问</span>
                                                <span>资深编辑</span>
                                                <span>高级平面设计师</span>
                                                <span>高级动画师</span>
                                                <span>2D反景原画师</span>
                                                <span>学科带头人 </span>
                                                <span>幼儿园园长</span>
                                                <span>校长</span>
                                                <span>教学总监</span>
                                                <span>教授</span>
                                                <span>技术经理</span>
                                                <span>...</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>知名客户：</b>
                                                <img src="/new-page/image/example/广告传媒教育/奥美.png" alt="奥美" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/恒美.png" alt="恒美" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/罗兰贝格.png" alt="罗兰贝格" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/尼尔森.png" alt="尼尔森" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/尚德机构.png" alt="尚德机构" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/盛世传媒.png" alt="盛世传媒" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/时代光华.png" alt="时代光华" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/智威汤逊.png" alt="智威汤逊" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/ctr.png" alt="ctr" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/1.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/2.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/3.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/4.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/5.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/6.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/7.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/广告传媒教育/8.png" alt="" height="30" class="bordered border-color-gray">
                                            </p>
                                        </div>
                                        <div class="c-content">
                                            <div class="c-title">
                                                <h3>交通•贸易•物流</h3>
                                                <small>Traffic & Trade & Logistics</small>
                                            </div>
                                            <p class="margin-top-10">
                                                <b>行业细分：</b>
                                                <span>快递</span>
                                                <span>航运／海运</span>
                                                <span>航天／航空</span>
                                                <span>铁路</span>
                                                <span>公路</span>
                                                <span>货运代理</span>
                                                <span>大宗商品贸易</span>
                                                <span>货物贸易</span>
                                                <span>服务贸易</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>成功案例：</b>
                                                <span>总经理</span>
                                                <span>电商运营总经理</span>
                                                <span>物流公司副总经理</span>
                                                <span>跨境电商销售总经理</span>
                                                <span>货代事业部总经理</span>
                                                <span>物流园区运营总监</span>
                                                <span>外贸总监</span>
                                                <span>销售总监</span>
                                                <span>融资总监</span>
                                                <span>大宗商品贸易经理</span>
                                                <span>车队长</span>
                                                <span>质量部经理</span>
                                                <span>贸易经理</span>
                                                <span>供应链／采购经理</span>
                                                <span>安全经理</span>
                                                <span>产品经理</span>
                                                <span>大客户经理</span>
                                                <span>商务经理</span>
                                                <span>航运市场经理</span>
                                                <span>人力资源总监／经理</span>
                                                <span>医疗器械物流质量管理高级经理</span>
                                                <span>收益管理经理</span>
                                                <span>...</span>
                                            </p>
                                            <p class="margin-top-20">
                                                <b>知名客户：</b>
                                                <img src="/new-page/image/example/物流运输贸易/德邦物流.png" alt="德邦物流" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/东方海外.png" alt="东方海外" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/联邦快递.png" alt="联邦快递" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/马士基.png" alt="马士基" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/摩科瑞.png" alt="摩科瑞" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/顺丰速递.png" alt="顺丰速递" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/万向集团.png" alt="万向集团" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/益海嘉里.png" alt="益海嘉里" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/正大集团.png" alt="正大集团" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/中国国旅.png" alt="中国国旅" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/中远集团.png" alt="中远集团" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/apl.png" alt="apl" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/1.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/2.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/3.png" alt="" height="30" class="bordered border-color-gray">
                                                <img src="/new-page/image/example/物流运输贸易/4.png" alt="" height="30" class="bordered border-color-gray">
                                            </p>
                                        </div>
                                    </div>
                                    <a class="more opener" href="javascript:;">&gt;&gt; 更多职位</a>
                                </div>
                            </div>
                        </div>
                        <div data-index="2" class="honor item">
                            <div class="content max">
                                <img src="/new-page/image/value-added.png" alt="增值服务" width="640">
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="btns">-->
                    <!--<a class="prev t1" href="javascript:void(0);">上切</a>-->
                    <!--<a class="next t2" href="javascript:void(0);">下切</a>-->
                <!--</div>-->
            </div>
        </div>

        <!--第4屏，职位-->
        <div id="server" class="server min section">
            <h1 class="navTitle navSer">职位<small>Positions</small></h1>
            <div class="fixPic p1"></div>
            <div class="appDetail">
                <div class="sjd app">
                    <div class="sjd_mobile">
                        <div class="ui"><img src="/new-page/image/m01.png"/></div>
                    </div>
                    <div class="jobList fr">
                        <ul class="jobTitle">
                            <li data-index="0" class="active">
                                <div class="img j01"></div>
                                <label>IT/互联网</label>
                            </li>
                            <li data-index="1">
                                <div class="img j02"></div>
                                <label>金融</label>
                            </li>
                            <li data-index="2">
                                <div class="img j03"></div>
                                <label>化工/环保/能源</label>
                            </li>
                            <li data-index="3">
                                <div class="img j04"></div>
                                <label>通信/电子/信息</label>
                            </li>
                            <li data-index="4">
                                <div class="img j05"></div>
                                <label>房产/建筑/建材</label>
                            </li>
                        </ul>
                        <div class="jobContent active"><!--01IT/互联网-->
                            <ul>
                                @foreach($jobList as $job)
                                    @if($job->type == 1)
                                        <li class="jobDesc">
                                            <div class="jobLeft">
                                                <p>
                                                    <span class="j1"><a href="/job/{{$job->id}}" target="_blank">{{$job->job_name}}</a></span>
                                                    <span class="j2">工作地点：{{$job->work_area}}</span>
                                                </p>
                                                <p>
                                                    <span class="j3">{{$job->company_name}}</span>
                                                    <span class="j4">工作年限：{{$job->years}}</span>
                                                </p>
                                            </div>
                                            <div class="jobRight">
                                                <p><span class="j5">年薪：{{$job->salary}}</span></p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="jobContent"><!--02金融-->
                            <ul>
                                @foreach($jobList as $job)
                                    @if($job->type == 2)
                                        <li class="jobDesc">
                                            <div class="jobLeft">
                                                <p>
                                                    <span class="j1"><a href="/job/{{$job->id}}" target="_blank">{{$job->job_name}}</a></span>
                                                    <span class="j2">工作地点：{{$job->work_area}}</span>
                                                </p>
                                                <p>
                                                    <span class="j3">{{$job->company_name}}</span>
                                                    <span class="j4">工作年限：{{$job->years}}</span>
                                                </p>
                                            </div>
                                            <div class="jobRight">
                                                <p><span class="j5">年薪：{{$job->salary}}</span></p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="jobContent"><!--07化工/环保/能源-->
                            <ul>
                                @foreach($jobList as $job)
                                    @if($job->type == 7)
                                        <li class="jobDesc">
                                            <div class="jobLeft">
                                                <p>
                                                    <span class="j1"><a href="/job/{{$job->id}}" target="_blank">{{$job->job_name}}</a></span>
                                                    <span class="j2">工作地点：{{$job->work_area}}</span>
                                                </p>
                                                <p>
                                                    <span class="j3">{{$job->company_name}}</span>
                                                    <span class="j4">工作年限：{{$job->years}}</span>
                                                </p>
                                            </div>
                                            <div class="jobRight">
                                                <p><span class="j5">年薪：{{$job->salary}}</span></p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="jobContent"><!--10通信/电子/信息-->
                            <ul>
                                @foreach($jobList as $job)
                                    @if($job->type == 10)
                                        <li class="jobDesc">
                                            <div class="jobLeft">
                                                <p>
                                                    <span class="j1"><a href="/job/{{$job->id}}" target="_blank">{{$job->job_name}}</a></span>
                                                    <span class="j2">工作地点：{{$job->work_area}}</span>
                                                </p>
                                                <p>
                                                    <span class="j3">{{$job->company_name}}</span>
                                                    <span class="j4">工作年限：{{$job->years}}</span>
                                                </p>
                                            </div>
                                            <div class="jobRight">
                                                <p><span class="j5">年薪：{{$job->salary}}</span></p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="jobContent"><!--03房产/建筑/建材-->
                            <ul>
                                @foreach($jobList as $job)
                                    @if($job->type == 3)
                                        <li class="jobDesc">
                                            <div class="jobLeft">
                                                <p>
                                                    <span class="j1"><a href="/job/{{$job->id}}" target="_blank">{{$job->job_name}}</a></span>
                                                    <span class="j2">工作地点：{{$job->work_area}}</span>
                                                </p>
                                                <p>
                                                    <span class="j3">{{$job->company_name}}</span>
                                                    <span class="j4">工作年限：{{$job->years}}</span>
                                                </p>
                                            </div>
                                            <div class="jobRight">
                                                <p><span class="j5">年薪：{{$job->salary}}</span></p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <ul class="jobLogo">
                            <li>
                                <img src="/new-page/image/job/专业团队.png" alt="">
                                <label>专业团队</label>
                            </li>
                            <li>
                                <img src="/new-page/image/job/专业服务.png" alt="">
                                <label>专业服务</label>
                            </li>
                            <li>
                                <img src="/new-page/image/job/专业流程.png" alt="">
                                <label>专业流程</label>
                            </li>
                            <li>
                                <img src="/new-page/image/job/快速体验.png" alt="">
                                <label>快速体验</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="fixPic p2"></div>
            <div class="appDetail">
                <div class="uzu app">
                    <div class="uzu_mobile">
                        <div class="ui"><img src="/new-page/image/m02.png"/></div>
                    </div>
                    <div class="jobList">
                        <ul class="jobTitle">
                            <li data-index="0" class="active">
                                <div class="img j06"></div>
                                <label>汽车/机械/制造</label>
                            </li>
                            <li data-index="1">
                                <div class="img j07"></div>
                                <label>消费品</label>
                            </li>
                            <li data-index="2">
                                <div class="img j08"></div>
                                <label>广告/传媒/教育</label>
                            </li>
                            <li data-index="3">
                                <div class="img j09"></div>
                                <label>交通/贸易/物流</label>
                            </li>
                            <li data-index="4">
                                <div class="img j10"></div>
                                <label>文化/旅游/健康</label>
                            </li>
                        </ul>
                        <div class="jobContent active"><!--04汽车/机械/制造-->
                            <ul>
                                @foreach($jobList as $job)
                                    @if($job->type == 4)
                                        <li class="jobDesc">
                                            <div class="jobLeft">
                                                <p>
                                                    <span class="j1"><a href="/job/{{$job->id}}" target="_blank">{{$job->job_name}}</a></span>
                                                    <span class="j2">工作地点：{{$job->work_area}}</span>
                                                </p>
                                                <p>
                                                    <span class="j3">{{$job->company_name}}</span>
                                                    <span class="j4">工作年限：{{$job->years}}</span>
                                                </p>
                                            </div>
                                            <div class="jobRight">
                                                <p><span class="j5">年薪：{{$job->salary}}</span></p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="jobContent"><!--06消费品-->
                            <ul>
                                @foreach($jobList as $job)
                                    @if($job->type == 6)
                                        <li class="jobDesc">
                                            <div class="jobLeft">
                                                <p>
                                                    <span class="j1"><a href="/job/{{$job->id}}" target="_blank">{{$job->job_name}}</a></span>
                                                    <span class="j2">工作地点：{{$job->work_area}}</span>
                                                </p>
                                                <p>
                                                    <span class="j3">{{$job->company_name}}</span>
                                                    <span class="j4">工作年限：{{$job->years}}</span>
                                                </p>
                                            </div>
                                            <div class="jobRight">
                                                <p><span class="j5">年薪：{{$job->salary}}</span></p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="jobContent"><!--08广告/传媒/教育-->
                            <ul>
                                @foreach($jobList as $job)
                                    @if($job->type == 8)
                                        <li class="jobDesc">
                                            <div class="jobLeft">
                                                <p>
                                                    <span class="j1"><a href="/job/{{$job->id}}" target="_blank">{{$job->job_name}}</a></span>
                                                    <span class="j2">工作地点：{{$job->work_area}}</span>
                                                </p>
                                                <p>
                                                    <span class="j3">{{$job->company_name}}</span>
                                                    <span class="j4">工作年限：{{$job->years}}</span>
                                                </p>
                                            </div>
                                            <div class="jobRight">
                                                <p><span class="j5">年薪：{{$job->salary}}</span></p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="jobContent"><!--09交通/贸易/物流-->
                            <ul>
                                @foreach($jobList as $job)
                                    @if($job->type == 9)
                                        <li class="jobDesc">
                                            <div class="jobLeft">
                                                <p>
                                                    <span class="j1"><a href="/job/{{$job->id}}" target="_blank">{{$job->job_name}}</a></span>
                                                    <span class="j2">工作地点：{{$job->work_area}}</span>
                                                </p>
                                                <p>
                                                    <span class="j3">{{$job->company_name}}</span>
                                                    <span class="j4">工作年限：{{$job->years}}</span>
                                                </p>
                                            </div>
                                            <div class="jobRight">
                                                <p><span class="j5">年薪：{{$job->salary}}</span></p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="jobContent"><!--05文化/旅游/健康-->
                            <ul>
                                @foreach($jobList as $job)
                                    @if($job->type == 5)
                                        <li class="jobDesc">
                                            <div class="jobLeft">
                                                <p>
                                                    <span class="j1"><a href="/job/{{$job->id}}" target="_blank">{{$job->job_name}}</a></span>
                                                    <span class="j2">工作地点：{{$job->work_area}}</span>
                                                </p>
                                                <p>
                                                    <span class="j3">{{$job->company_name}}</span>
                                                    <span class="j4">工作年限：{{$job->years}}</span>
                                                </p>
                                            </div>
                                            <div class="jobRight">
                                                <p><span class="j5">年薪：{{$job->salary}}</span></p>
                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <ul class="jobLogo">
                            <li>
                                <img src="/new-page/image/job/专业效率.png" alt="">
                                <label>专业效率</label>
                            </li>
                            <li>
                                <img src="/new-page/image/job/精准推荐.png" alt="">
                                <label>精准推荐</label>
                            </li>
                            <li>
                                <img src="/new-page/image/job/质量保障.png" alt="">
                                <label>质量保障</label>
                            </li>
                            <li>
                                <img src="/new-page/image/job/互联共享.png" alt="">
                                <label>互联共享</label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--第5屏，资讯-->
        @if(true)
        <div id="article" class="min section">
            <h1 class="navTitle navArt">资讯<small>What's News?</small></h1>
            <div class="mediaReports max">
                <h3 class="itemNav">
                    <label data-index="0" class="active">即沃研究院<small>Giewoo Research</small></label>
                    <label data-index="1">职场动态<small>Job Dynamics</small></label>
                    <i></i>
                </h3>
                <div class="mediaReportsList clear">
                    <ul class="active">
                        @foreach($artList as $art)
                            @if($art->type == 2)
                                <li>
                                    <a href="/research/{{$art->id}}" target="_blank" title="{{$art->title}}">
                                        <label>{{$art->title}}</label>
                                        <span class="desc">{{$art->content}}</span>
                                        <span class="pic"><img src="http://www.giewoo.com{{$art->picture}}" alt="{{$art->title}}" width="235" height="120"/></span>
                                    </a>
                                </li>
                            @endif
                        @endforeach
                        <p><a href="/research" target="_blank">查看更多文章</a></p>
                    </ul>
                    <ul>
                        @foreach($artList as $art)
                            @if($art->type == 1)
                        <li>
                            <a href="/dynamic/{{$art->id}}" target="_blank" title="{{$art->title}}">
                                <label>{{$art->title}}</label>
                                <span class="desc">{{$art->content}}</span>
                                <span class="pic"><img src="http://www.giewoo.com{{$art->picture}}" alt="{{$art->title}}" alt="{{$art->title}}" width="235" height="120"/></span>
                            </a>
                        </li>
                            @endif
                        @endforeach
                        <p><a href="/dynamic" target="_blank">查看更多文章</a></p>
                    </ul>
                </div>
            </div>
        </div>
        @endif

        <!--第6屏，团队-->
        <div id="team" class="min section">
            <h1 class="navTitle navTeam">团队<small>Our Team</small></h1>
            <div class="teamList min max">
                <ul class="clear">
                    <li>
                        <a href="javascript:void(0);">
                            <label>顾问漂流记</label>
                            <span>&nbsp;<strong>01</strong><i></i></span>
                            <img src="/new-page/image/team/t01.jpg"/>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <label>即沃北京办野外训练营</label>
                            <span>&nbsp;<strong>02</strong><i></i></span>
                            <img src="/new-page/image/team/t02.jpg"/>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <label>金融顾问头脑风暴</label>
                            <span>&nbsp;<strong>03</strong><i></i></span>
                            <img src="/new-page/image/team/t03.jpg"/>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <label>团建游戏</label>
                            <span>&nbsp;<strong>04</strong><i></i></span>
                            <img src="/new-page/image/team/t04.jpg"/>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <label>人力资源管理论坛</label>
                            <span>&nbsp;<strong>05</strong><i></i></span>
                            <img src="/new-page/image/team/t05.jpg"/>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <label>上海猎头行业峰会</label>
                            <span>&nbsp;<strong>06</strong><i></i></span>
                            <img src="/new-page/image/team/t06.jpg"/>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="contact">
            <div class="conContainer min max clear">
                <div class="l">
                    <ul>
                        <li class="icon-address">地 址：上海黄浦区北京东路666号科技京城西楼30楼</li>
                        <li class="icon-zip-code">邮 编：200001</li>
                        <li class="icon-traffic">交 通：地铁1/2/8号线人民广场站,2/10号线南京东路站</li>
                        <li class="icon-tel">电 话：400-670-7725</li>
                        <li class="icon-email">邮 箱：<a href="mailto:sh@giewoo.com">sh@giewoo.com</a></li>
                    </ul>
                    <dl>
                        <dt>企业下单<i><!--Daisy--></i></dt>
                        <dd>电 话：021-6119 4048</dd>
                        <dd>邮 箱：daisy@giewoo.com</dd>
                    </dl>
                    <dl>
                        <dt>推广合作<i><!--Joanna--></i></dt>
                        <dd>电 话：021-6119 4047</dd>
                        <dd>邮 箱：joanna@giewoo.com</dd>
                    </dl>
                </div>
                <p>
                    <label>请关注即沃金融圈和即沃猎头微信公众号</label>
                    <img src="/new-page/image/ewm.png" alt="请关注我们的微信"/>
                </p>
            </div>
        </div>

        <!--页脚-->
        <div class="footer">
            &copy;2015 上海即沃企业管理咨询有限公司 版权所有　　|　　<a href="javascript:;" target="_blank">沪ICP备15055149号</a>
        </div>
    </div>

    <div id="dialogContainer" class="dialogContainer" style="display: none;">
        <div id="dialogBody" class="dialogBody">
            <div id="dialogHead">
                <h2></h2>
                <i class="icon-close-dialog"></i>
            </div>
            <div id="dialogMain" class="dialogMain">
                <div class="iframe"></div>
            </div>
        </div>
    </div>
    <script src="http://hm.baidu.com/h.js?a7509d0772feb2acb4b656a170bf7297"></script>
    <script src="/new-page/js/jquery.min.js"></script>
    <script src="/new-page/js/pagescroller.min.js"></script>
    <script src="/new-page/js/jquery-ui-1.8.22.custom.min.js"></script>
    <script src="/new-page/js/jquery.scrollbox.js"></script>
    <script src="/new-page/js/about.js"></script>

</body>
</html>