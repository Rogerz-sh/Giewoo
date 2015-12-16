/**
 * Created by roger on 15/11/14.
 */
$(function () {
    var gridData = [
        { id: 1, job_name: 'PHP开发工程师', job_salary: '15,30', job_address: '上海', job_resume: 3 },
        { id: 2, job_name: 'Android开发工程师', job_salary: '15,30', job_address: '上海', job_resume: 2 },
        { id: 3, job_name: 'IOS开发工程师', job_salary: '15,30', job_address: '上海', job_resume: 4 },
        { id: 4, job_name: '系统架构师', job_salary: '20,50', job_address: '上海', job_resume: 1 },
        { id: 5, job_name: '产品经理', job_salary: '10,30', job_address: '上海', job_resume: 2 },
        { id: 6, job_name: 'Java高级开发工程师', job_salary: '20,40', job_address: '上海', job_resume: 3 },
    ];

    $('.tab-title li').each(function (i, li) {
        $(li).click(function () {
            $(this).addClass('active').siblings().removeClass('active');
        });
    });

    $('#grid').kendoGrid({
        toolbar: [{
            template: '<div class="col-xs-4 pull-right"><div class="input-group"><input type="text" name="keyword" id="keyword" class="form-control"><span class="input-group-addon" id="key-search"><i class="fa fa-search"></i></span></div></div>'
        }],
        dataSource: {
            data: gridData,
            pageSize: 5
        },
        pageable: {
            messages: {
                display: '当前显示{0}-{1}条 共{2}条'
            }
        },
        columns: [
            {title: '职位名称', field: 'job_name'},
            {title: '工作地点', field: 'job_address'},
            {title: '薪酬范围', field: 'job_salary', template: getSalary},
            {title: '推荐简历数', field: 'job_resume'},
            {title: '操作', template: '<a class="btn btn-default btn-sm">速配</a> <a class="btn btn-default btn-sm">参会</a> '}
        ]
    });

    function getSalary(dataItem) {
        var salary = dataItem.job_salary.split(',');
        return '{0}万 ~ {1}万'.format(salary[0], salary[1]);
    }

    $('#keyword').bind('keyup', function (e) {
        if (e.which === 13) $('#key-search').trigger('click');
    });

    $('#key-search').click(function () {
        var keyword = $('#keyword').val();
        $('#grid').data('kendoGrid').dataSource.filter({field: 'job_name', operator: 'contains', value: keyword});
    });
});