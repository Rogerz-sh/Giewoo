/**
 * Created by roger on 15/12/10.
 */
$(function () {
    $.$ajax.get('/site/area-job-list-data', function (res) {
        var jobList = {};
        $.each(res, function (i, job) {
            if (!jobList[job.type]) jobList[job.type] = [];
            jobList[job.type].push('<li class="padding-top-5 padding-bottom-5"><a class="black" href="/site/job/{0}">{1}</a> <span class="pull-right orange">{2}</span><br> <small class="dark-gray">{3}</small></li>'.format(job.id, job.job_name, job.salary, job.company_name));
        });
        for (var type in jobList) {
            $('#area_job_list').find('ul[data-type="{0}"]'.format(type)).html(jobList[type].join(''));
        }
    });

    $.$ajax.get('/site/article-list-data', function (res) {
        var artList = {};
        $.each(res, function (i, art) {
            if (!artList[art.type]) artList[art.type] = [];
            artList[art.type].push('<li><a href="/site/article/{0}">{1}</a> <span class="pull-right dark-gray">{2}</span></li>'.format(art.id, art.title, new Date(art.publish.replace(/-/g, '/')).format()));
        });
        for (var type in artList) {
            $('#news-content').find('ul[data-type="{0}"]'.format(type)).html(artList[type].join(''));
        }
    });

    $.$ajax.get('/site/update-data/', function (res) {
        var updateData = [], index = 0;
        $.each(res, function (i, item) {
            if (i > 0 && i % 4 == 0) index++;
            if (!updateData[index]) updateData[index] = [];
            updateData[index].push('\
            <li class="padding-left-10 padding-right-10">\
                <h4 class="no-margin-bottom">{0}<small> - {1}</small> <small class="margin-left-10">{2}</small>  <small class="orange pull-right bold">年薪{3}万</small></h4>\
                <p class="dark-gray">于<b>{4}</b>成功入职 <span class="pull-right">周期<b>{5}</b>天</span></p>\
            </li>\
            '.format(item.job_name, item.company_name, item.work_area, item.salary, Date.format(item.publish), item.cost));
        });
        var ulHtml = [];
        for (var i = 0; i < updateData.length; i++) {
            ulHtml.push('<ul>{0}</ul>'.format(updateData[i].join('')));
        }
        $('#data-container .slide-content').html('<div>{0}</div>'.format(ulHtml.join('')));
    });

    var slideIndex = 0, slideDegree = 0;
    $('.slide-list .arrow').click(function () {
        var direct = ~~$(this).data('direct');
        slideIndex += direct;
        var idx = slideIndex % 4, tables = $('.slide-content table'), lights = $('.slide-light span');
        idx = idx < 0 ? 4 + idx : idx;
        //tables.eq(idx).addClass('active').siblings('table').removeClass('active');
        lights.eq(idx).addClass('active').siblings('span').removeClass('active');
        var degree = idx * -680;
        $('.slide-content>div').css('left', degree+'px');
    });
});