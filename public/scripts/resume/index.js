/**
 * Created by roger on 15/11/14.
 */
$(function () {
    var gridData = [
        { id: 1, job_name: 'PHP开发工程师', rsm_name: 'php_3年_李先生', job_id: 3, rsm_date: '2015-11-22', rsm_status: 1, rsm_source: 1},
        { id: 2, job_name: 'Android开发工程师', rsm_name: 'java_5年_王先生', job_id: 3, rsm_date: '2015-11-22', rsm_status: 0, rsm_source: 2},
        { id: 3, job_name: 'IOS开发工程师', rsm_name: 'oc_2年_孙小姐', job_id: 3, rsm_date: '2015-11-22', rsm_status: 1, rsm_source: 1},
        { id: 4, job_name: '系统架构师', rsm_name: 'c++_5年_隆先生', job_id: 3, rsm_date: '2015-11-22', rsm_status: 1, rsm_source: 2},
        { id: 5, job_name: '产品经理', rsm_name: 'pm_5年_万女士', job_id: 3, rsm_date: '2015-11-22', rsm_status: 1, rsm_source: 2},
        { id: 6, job_name: 'Java高级开发工程师', rsm_name: 'java_5年_王先生', job_id: 3, rsm_date: '2015-11-22', rsm_status: 2, rsm_source: 2},
    ];

    $('.tab-title li').each(function (i, li) {
        $(li).click(function () {
            $(this).addClass('active').siblings().removeClass('active');
            var source = ~~$(this).data('source');
            if (source) {
                $('#grid').data('kendoGrid').dataSource.filter({field: 'rsm_source', operator: 'eq', value: source});
            } else {
                $('#grid').data('kendoGrid').dataSource.filter([]);
            }
        });
    });

    $('#grid').kendoGrid({
        toolbar: [{
            template: '<div class="col-xs-4 pull-right"><div class="input-group"><input type="text" name="keyword" id="keyword" class="form-control"><span class="input-group-addon" id="key-search"><i class="fa fa-search"></i></span></div></div>'
        }],
        dataSource: {
            data: gridData,
            pageSize: 10
        },
        pageable: {
            messages: {
                display: '当前显示{0}-{1}条 共{2}条'
            }
        },
        columns: [
            {title: '简历名称', field: 'rsm_name'},
            {title: '职位名称', field: 'job_name'},
            {title: '推荐时间', field: 'rsm_date'},
            {title: '简历来源', field: 'rsm_source', template: getSource},
            {title: '简历状态', field: 'rsm_status', template: getStatus},
            {title: '操作', template: '<a href="/resume/view/#: id#" class="btn btn-default btn-sm">查看简历</a> '}
        ]
    });

    function getStatus(dataItem) {
        return ['已结束', '待审核', '面试中'][dataItem.rsm_status];
    }

    function getSource(dataItem) {
        return ['', '面试速配', '招聘会'][dataItem.rsm_source];
    }


    $('#keyword').bind('keyup', function (e) {
        if (e.which === 13) $('#key-search').trigger('click');
    });

    $('#key-search').click(function () {
        var keyword = $('#keyword').val();
        $('#grid').data('kendoGrid').dataSource.filter({field: 'rsm_name', operator: 'contains', value: keyword});
    });
});