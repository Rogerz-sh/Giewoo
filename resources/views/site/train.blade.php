@extends('layout.header')
@section('title', '即沃咨询 - 极速列车')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="wrapper">
                <img src="/images/temp_01.jpg" alt="猎头服务" width="100%" height="300">
                <div style="position:absolute;width:100%;top:0;left:0;text-align:center;padding-top:40px;">
                    <h1 class="white" style="text-shadow: 1px 2px 5px #333;">面试速配 ＋ 专场招聘</h1>
                    <h3 class="margin-top-30 white" style="text-shadow: 1px 2px 5px #333;">互联网思维＋技术、专家级猎头顾问、智能云人才库、完善保障服务</h3>
                </div>
            </div>
        </div>
        <div class="row margin-top-20">
            <div class="wrap">
                <ul class="breadcrumb">
                    <li><a href="/">首页</a></li>
                    <li>极速列车</li>
                </ul>
            </div>
        </div>
        <div class="row margin-bottom-20">
            <div class="wrap">
                <div class="col-xs-4">
                    <ul class="site-nav">
                        <li data-target="#fwjs" class="active">服务介绍</li>
                        <li data-target="#mssp">面试速配</li>
                        <li data-target="#zczp">专场招聘</li>
                        <li data-target="#fwys">服务优势</li>
                        <li data-target="#zzfw">增值服务</li>
                        <li data-target="#cjwt">常见问题</li>
                    </ul>
                </div>
                <div class="col-xs-8">
                    <ul class="site-content">
                        <li id="fwjs" class="active">

                            <p class="indent"><span class="font-140">极速猎车</span>是我司创新猎头界的新模式，依托于强大的人才资源和先进的人职匹配技术，专注为企业提供营销类和技术类人才的一站式招聘服务，采用面试速配＋专场招聘的双模式，解决目前企业高频次岗位招聘所面临的面试分散、成本高、效率低的难题，企业花1／10不到的猎头费用就能招到合适的专业人才，真正实现“猎超所值” 。</p>
                            <p class="indent">我们的寻访中心会根据客户所在的行业和招聘需求，快速组织擅长该领域的专业猎头团队进行职位的全方位评估分析，提出优化建议和方案，24小时内开展人才精准推荐、提前邀约和专场洽谈的服务。极速猎车已经成功帮助多个面临用人需求急增且常规招聘渠道难以满足的企业在短时间完成营销类、技术类岗位的集中招募。</p>

                        </li>
                        <li id="mssp">
                            <p class="font-120">面试速配</p>
                            <p class="indent">是即沃咨询推出的针对营销和技术两大类职位的人选“面试”为结果进行付费的招聘服务。通过大数据算法进行初步筛选，同时根据客户特定需求，由擅长该领域的猎头进行专业的匹配推荐；人选到场面试后才会向企业收取服务费。人选未到场，不收取任何费用。 （电话面试、视频面试均算到场面试）</p>
                            <p class="font-120">服务流程</p>
                            <p><img src="/images/site/mslc.jpg" alt="" width="100%"></p>
                            <p class="font-110 text-primary">使用事项：</p>
                            <p>1、预扣简历下载数：是指客户使用“面试速配”服务时，系统会预扣数枚人才币，客户确认人选到场面试后系统会正式扣除相应的人才币。若在“面试速配”服务期（10天）结束时人选还未到场面试，系统会自动返还预扣的人才币。</p>
                            <p>2、每次使用面试速配服务时需要预扣的人才币与职位年薪成正比，具体预扣数详见极速猎车套餐</p>
                            <p>3、启动服务后1-2天内即可推荐面试的人选</p>
                            <p>4、客户使用人才币可自由置换面试速配、专场招聘以及其它增值服务，不受限制。</p>
                        </li>
                        <li id="zczp">
                            <p class="font-120">专场介绍</p>
                            <p class="indent">企业专场招聘会是为解决企业招聘职位多、难度大、成本高、时间紧迫等难题而推出的一项整合招聘服务 。该招聘服务通过"方案量身定制、信息立体覆盖、人才提前预约、资源共享"等方式高效进行，既可避免网络招聘海量人选但面试却相对较分散的局面，又可弥补现场招聘偶然性大的缺点，而且有效解决了传统猎头的高费用风险。即沃猎头推出的专场招聘大大提升了企业招聘效率，同时也有效的展示了企业的品牌，提升了企业对人才需求的竞争力，是企业的理想招聘选择！</p>
                            <p class="font-120">独有价值</p>
                            <p class="indent">方案量身定制——针对企业文化、经营状况、组织结构、管理风格、招聘需求等各个方面做深入分析全面评估，为企业量身定制招聘方案；</p>
                            <p class="indent">人才精准预约——启用专业猎头团队，整合大数据库资源，全面展开精确寻访，定向邀约，提供企业提前查看的服务，确保企业与人才的精准匹配；</p>
                            <p class="indent">猎超所值——享受猎头服务的流程，高品质的面谈，个性化的服务，价格实惠，真正解决了企业招聘难且成本高的问题；</p>
                            <p class="indent">全程贵宾体验——宾馆接待，专项小组全程跟进服务，零时差快速响应，全面协助企业提高招聘效率；</p>
                            <p class="indent">人才资源共享——打破人才资源的渠道、形式、空间限制，同场精准预约的各类人才聚集一堂，企业更多机会、更多选择。</p>
                            <p class="font-120">专项招聘服务流程</p>
                            <p><img src="/images/site/zplc.jpg" alt="" width="100%"></p>
                            <p class="text-primary">专项招聘费用构成:</p>
                            <p>1、会务组织费：依据企业招聘要求，确定招聘场馆及会务工作内容。</p>
                            <p>2、人才邀约费：开展人才邀约工作所涉及的相关费用，平均每岗位确保邀约3-5名适岗人才参会。</p>
                            <p>3、企业接待费：企业招聘工作人员的住宿及餐饮费用。</p>
                            <p>4、广告宣传费：根据招聘岗位需要，分析决定是否投放广告或怎样投放广告。</p>
                            <p>5、项目管理费：包含税金、办公费、资源使用费、后续服务等费用。</p>

                        </li>
                        <li id="fwys">
                            <h3 class="padding-left-25">服务优势</h3>
                            <p class="text-center col-xs-10"><img src="/images/site/fwys.png" alt="" class="margin-20" width="100%"></p>
                            <div class="clearfix"></div>
                            <p class="indent">极速猎车专注于为企业提供营销和技术两大类人才的解决方案，借助互联网作为一个工具，来优化招聘服务的效率，加强内部产品化、智能化、专业化的运作体系，让流程变得更加的清晰简单，让专项人才的积累更加的丰富快速，很好的降低了猎头服务价格，使企业都可享受到此等服务。专注、定制、精准、高效、低成本的服务已经赢得了众多客户的一致好评和信任！</p>
                        </li>
                        <li id="zzfw">
                            <h3 class="padding-left-25">增值服务</h3>
                            <p class="text-center"><img src="/images/site/zzfw.jpg" alt="" width="100%"></p>

                        </li>
                        <li id="cjwt">
                            <h3 class="padding-left-25">常见问题</h3>
                            <p class="indent text-info">1、极速猎车与传统猎头有什么差异</p>
                            <p class="indent">专注营销和技术两大类高频次岗位打造的面试速配＋专场招聘双模式的招聘服务。</p>
                            <p class="indent">服务过程高效透明，借助互联网作为一个工具和平台，客户均在我们的后台系统实现整个流程的操作，包括目标候选人匹配、推荐、面试、专场洽谈、录用结果等</p>
                            <p class="indent">服务费按照服务效果来计算，总的费用约传统猎头的1/10</p>
                             
                            <p class="indent text-info">2、极速猎车服务相比传统猎头服务费用低很多，是不是推荐的质量不如猎头业务呢？</p>
                            <p class="indent">极速猎车是我司打造的互联网化的猎头产品，我们持续对技术和营销两大类职位的人才进行深入研究和资源拓展，已经形成了强大的数据平台，依靠大数据算法＋顾问推荐完全可以实现人才与企业职位的精准和快速匹配。</p>
                            <p class="indent">服务的团队均是由擅长营销职能和技术职能类的五年以上的专业猎头顾问负责</p>
                            <p class="indent">整个操作流程具有量身定制、专注高效、面试集中、性价比高等特点</p>
                             
                            <p class="indent text-info">3、我们公司确认合作后，你们的顾问多长时间能推送简历？多长时间能完成招聘到岗？</p>
                            <p class="indent">确认合作后，我们系统在60秒内进行职位的初步匹配，再由佐尔的顾问进行第二轮的简历筛选与面试，平均1—2个工作日推送首批候选人简历，面试根据客户时间来定。具体到岗的时间，需要企业方的及时配合，预计在1-2周内基本就可以确定一位准候选人。</p>
                             
                            <p class="indent text-info">4、如果我们用面试速配服务面了10个候选人，钱花了，却没招到合适的，怎么办？</p>
                            <p class="indent">我们近一年数据的统计，平均面试3.2个人就可以拿到客户的offer。假设真有面试10个候选人还没有确认下来，可以延用我们的专场招聘服务也可以转到我们传统猎头事业部。</p>
                             
                            <p class="indent text-info">5、通过你们的极速猎车服务招到人选了，后续还有服务保障吗，候选人到岗没几天就走了，怎么办?</p>
                            <p class="indent">我们推荐的人选被客户录用了，我们可以提供专业的背景调查服务。同时亦可提供3个月的保证期服务，根据人选年薪的不同，收取180-600枚不等的人才币。</p>
                             
                            <p class="indent text-info">6、你们的专场招聘主要是针对什么行业的，一次会有几家企业？</p>
                            <p class="indent">根据参会企业不同的招聘需求，我们会定期举行职能类和行业类各具特色的专场招聘会，一次会有5-10家不等的同行业或者类似招聘职位的企业参加 </p>

                            <p class="indent text-info">7、你们的面试速配和专场招聘服务是必须绑在一起还是我们可以自由选择呢？</p>
                            <p class="indent">极速猎车其中一个优势就是根据客户的招聘需求和招聘节点的不同，我们专业团队会为其进行量身定制， 给出符合客户现阶段最适合的招聘方案，并不一定要捆绑服务，当然客户也是完全可以自由选择</p>
                             
                            <p class="indent text-info">8、用了你们套餐服务，如果只花了1000元就招到人选了，剩余的费用怎么处理呢？</p>
                            <p class="indent">我们的套餐目前是没有时间期限的，客户在任一时间内有招聘需求了，都可以重新启动套餐服务</p>
                             
                            <p class="indent text-info">9、你们营销类和技术类的职位包括哪些岗位？</p>
                            <p class="indent">营销类职位主要包括：销售岗、市场岗、品牌岗、网络营销岗、公关／媒介岗、高级管理岗</p>
                            <p class="indent">技术类职位主要包括：硬件开发岗、企业软件岗、前端开发、移动端开发、后端开发、运维岗、测试岗、高级管理岗</p>
                             
                            <p class="indent text-info">10、具备什么样的条件可以享受你们俱乐部的服务？</p>
                            <p class="indent">我们俱乐部服务是按照经验值累计的，积累到一定数量就可以提升等级，同时可以享受相对应的增值服务和回馈客户的福利。具体可参考我们官网的俱乐部单元</p>

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