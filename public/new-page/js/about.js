jQuery(document).ready(function($){
    //$('.loading').fadeOut();

    //是否支持视频
    if (!window.applicationCache) {
        document.getElementById('poster').style.display = 'block';
    }
    var old = 0;
    $('video').bind('timeupdate', function (e) {
        var t = parseInt(this.currentTime / 5) % 2, img = $('.t1').find('img');
        if (t === old) return;
        if (t) {
            img.attr('src', '/new-page/image/home_txt_b.png');
        } else {
            img.attr('src', '/new-page/image/home_txt_a.png');
        }
        old = t;
    });

    //网站导航
    //$('#menu li a[data-target]').click(function () {
    //    var target = $(this).data('target');
    //    document.body.scrollTop = $('#'+target).offset().top;
    //});

    //百度商桥弹出窗口
    $('.opener').click(function () {
        window.open('http://p.qiao.baidu.com/im/index?siteid=8948819&ucid=18532798');
    });

    //banner
    var banner_idx = 0;
    setInterval(function () {
        $('#banner ul').css('top', ++banner_idx * 30 * -1 + 'px');
        if (banner_idx >= 3) banner_idx = 0;
    }, 3000);

    //我们，3个模块切换
    $('.about .usHead li').on('click', function(event){
        event.preventDefault();
        var onItem = $(this);
        if(!onItem.hasClass('on')) {
            // if it's not already on
            var onPosition = onItem.index();
            usCurrent($('.about .aContainer'), $('.about .usHead'), onPosition);
        }
    });

    var currentIndex = null;
    $('.about .prev').on('click', function(event){
        event.preventDefault();
        currentIndex = $('.about .usHead .on').index();
        if(currentIndex-1 < 0){
            currentIndex = 2;
        }
        else{
            currentIndex = currentIndex - 1;
        }
        usCurrent($('.aContainer'), $('.usHead'), currentIndex);
    });

    $('.about .next').on('click', function(event){
        event.preventDefault();
        currentIndex = $('.about .usHead .on').index();
        if(currentIndex+1 > 2){
            currentIndex = 0;
        }
        else{
            currentIndex = currentIndex + 1;
        }
        usCurrent($('.about .aContainer'), $('.about .usHead'), currentIndex);
    });

    usCurrent($('.about .aContainer'), $('.about .usHead'), 1);


    //服务，3个模块切换
    $('.join .usHead li').on('click', function(event){
        event.preventDefault();
        var onItem = $(this);
        if(!onItem.hasClass('on')) {
            // if it's not already on
            var onPosition = onItem.index();
            usCurrent($('.join .aContainer'), $('.join .usHead'), onPosition);
        }
    });

    var currentIndex1 = null;
    $('.about .prev').on('click', function(event){
        event.preventDefault();
        currentIndex1 = $('.join .usHead .on').index();
        if(currentIndex1-1 < 0){
            currentIndex1 = 2;
        }
        else{
            currentIndex1 = currentIndex1 - 1;
        }
        usCurrent($('.join .aContainer'), $('.join .usHead'), currentIndex1);
    });

    $('.about .next').on('click', function(event){
        event.preventDefault();
        currentIndex1 = $('.join .usHead .on').index();
        if(currentIndex1+1 > 2){
            currentIndex1 = 0;
        }
        else{
            currentIndex1 = currentIndex1 + 1;
        }
        usCurrent($('.join .aContainer'), $('.join .usHead'), currentIndex1);
    });

    usCurrent($('.join .aContainer'), $('.join .usHead'), 1);

    //我们.新闻，图片展示
    pics.init('informationPics', 275, true);
    pics.init('culturePics', 275, true);
    pics.init('honorPics', 275, true);
    pics.init('newsContainer', 275, true);

    $('.cases .c-side li').each(function (i, li) {
       $(li).hover(function () {
           $('.cases .c-side li').removeClass('active');
           $(this).addClass('active');
           $('.c-content').removeClass('active').eq(i).addClass('active');
       });
    });


    //职位切换面板
    $('.jobTitle').delegate('li', 'click', function () {
        var idx = $(this).data('index'), industry = $(this).data('industry');
        $(this).addClass('active').siblings().removeClass('active');
        $(this).parents('.jobList').find('.jobContent').removeClass('active').eq(idx).addClass('active');
        $(this).parents('.jobList').find('li.more a').attr('href', '/jobs/' + industry)
    });


    //资讯切换面板
    $('.mediaReports>.itemNav').delegate('label', 'click', function () {
        var idx = $(this).data('index');
        $(this).addClass('active').siblings('label').removeClass('active');
        $('.mediaReportsList').find('ul').removeClass('active').eq(idx).addClass('active');
    });


    //第一屏视差滚动
    $('#home').css('height', $(window).height() + 'px');
    var iOffsetTop = $('#job').offset().top,
        iSHeight = $(window).height(),
        iTotalTop = iSHeight + iOffsetTop;
    $(window).scroll(function(){
        //顶部导航
        var iTop = $(window).scrollTop(),
            oHome = $('#index'),
            oPoster = $('#poster'),
            oTopBar = $('.topBar');
        var opc = 0;
        if((135/iTop) < 0.5){
            opc = 0.5;
        }
        else{
            opc = 135/iTop;
        }
        oHome.animate({
            'opacity': opc
        },1);
        oPoster.animate({
            'opacity': opc
        },1);
        if(iTop >= 0 && iTop < $('#home').height() - 220){
            oTopBar.addClass('fixedTopBar').animate({
                'opacity': 1
            },1);
            oHome.show();
            //改变侧边导航颜色
            $('.pageScroll').removeClass('pGrey');
        }
        else{
            oTopBar.removeClass('fixedTopBar');
            oHome.hide();
            //改变侧边导航颜色
            $('.pageScroll').addClass('pGrey');
        }

        //侧边导航
        //topBar();

        //背景图微移
        var posY = 0;
        if(iTop > 0){
            posY = -3055/iTop*110;
        }
        $('.fixPic').css('background-position', 'center '+posY+'px');

        //加入我们，添加飞机动画
        var joinUsTop = $('#server').offset().top;
        if(iTop > joinUsTop - 300){
            $('.plane').addClass('ant');
        }
    });

    //load
    $('.load').each(function(){
        var $this = $(this);
        $this.on('click', function(){
            var _src = $this.attr('data-src'),
                _title = $this.attr('data-title'),
                _index = $this.attr('data-index'),
                _act = {};
            var prm = {
                title: _title
            };
            dialog(prm);
            if(_index){
                _act.index = _index;
            }
            if(_act){
                $('.iframe').attr('data-index', _act.index);
            }
            $('.iframe').load(_src);
        });
    });
    $.ajaxSetup ({
        cache: false //关闭AJAX相应的缓存
    });

    //关闭弹出层
    var timer = null;
    $('.icon-close-dialog, .dialogContainer').on('click', function(){
        clearInterval(timer);
        $('#dialogBody').animate({
            left: '150%',
            opacity: 0
        });
        timer = setTimeout(function(){
            $('#dialogContainer').fadeOut();
        }, 200);
        $('#dialogHead h2').html('');
        $('.iframe').html('');
        $('html').css('overflow', 'auto');
    });

    $('.dialogBody').on('click', function(){
        return false;
    });

});

$(window).resize(function(){
    pics.aut('informationPics', 275);
    pics.aut('culturePics', 275);
    pics.aut('honorPics', 275);
    pics.aut('newsContainer', 275);

    var iIndex = $('.usHead li.on').index();
    usCurrent($('.aContainer'), $('.usHead'), iIndex);

    $('#home').css('height', $(window).height() + 'px');
    $('#poster').addClass('video');
});

//关闭提示
function closeLoading(){
    //document.getElementById('loadDiv').style.display = 'none';
}

// 我们模块切换
function usCurrent(container, pagination, n){
    var iW = $(window).width();
    if(iW<1100){
        iW = 1100;
    }
    else{
        iW = $(window).width();
    }
    var oItem = $('.usBox .item');
    $('.aContainer').css('width', oItem.length * iW + 'px');
    oItem.css('width', iW + 'px');
    var navigationDot = pagination.find('.on');
    navigationDot.removeClass('on');
    pagination.find('li').eq(n).addClass('on');
    container.animate({
        'left': -n*iW+'px'
    });
}

//导航
function topBar(){
    var topBar = $('.topBar'),
        iScrollTop = $(window).scrollTop();
    if(iScrollTop > $('#home').height() - 328){
        $('.pageScroll').addClass('showTitle').css('display', 'block');
    }
    else{
        $('.pageScroll').removeClass('showTitle').css('display', 'none');
    }
}

function dialog(prm){
//弹出层
    $('#dialogHead h2').html(prm.title);
    $('#dialogContainer').css('display','block');
    $('#dialogBody').animate({
        left: '50%',
        opacity: 1
    });
    $('html').css('overflow', 'hidden');
}

//模块图片滚动
var pics = {
    init: function(container, n, status){
        this.aut(container, n);
        if(status){
            picsMove(container);
        }
    },
    aut: function(container, n){
        var winWidth = $(window).width();
        if(winWidth < 1100){
            winWidth = 1100;
        }
        else{
            winWidth = $(window).width();
        }
        var oPicBox = $('ul', $('#'+container));
        var aLi = $('li',$('#'+container));
        var sideWidth = (winWidth - n*4)/2;
        oPicBox.css({'margin-left': -(aLi.length * n - winWidth)/2 + 'px'});
        $('.layer').css('width', sideWidth + 'px');
        $('.pics').css('width', winWidth + 'px');
        $('.newsList').css('width', winWidth + 'px');
        $('.usBox .item').css('width', winWidth + 'px');
    }
}

function picsMove(container){
    var autoPlay = false;
    if(container == 'newsContainer'){
        autoPlay = true;
    }
    $('#'+container).scrollbox({
        direction: 'h',
        distance: 275,
        autoPlay: autoPlay
    });
    var oParents = $('#'+container).parent();
    oParents.find('.btnPrev').click(function () {
        $('#'+container).trigger('backward');
    });
    oParents.find('.btnNext').click(function () {
        $('#'+container).trigger('forward');
    });
}
