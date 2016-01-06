/**
 * Created by roger on 15/12/8.
 */
$(function () {
    $('#grid').kendoGrid({
        dataSource: {
            data: [],
            pageSize: 10,
            schema: {
                model: {
                    id: 'id'
                }
            },
            filter: {field: 'deleted', operator: 'neq', value: true}
        },
        columns: [
            {field: 'id', title: 'ID'},
            {field: 'job_name', title: '职位名称'},
            {field: 'company_name', title: '所属企业'},
            {field: 'work_area', title: '工作地点'},
            {field: 'salary', title: '岗位年薪'},
            {field: 'cost', title: '周期', template: '#:cost#天'},
            {field: 'showing', title: '显示', template: getStatus},
            {field: 'industry', title: '岗位类别', template: getIndustry},
            {field: 'publish', title: '入职日期', template: getDate},
            {title: '操作', template: '<a href="/example/edit/#:id#" class="btn btn-default btn-sm"><i class="fa fa-pencil"></i></a> ' +
            '<a data-id="#:id#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>', width: 140}
        ],
        scrollable: false,
        pageable: true,

    });

    $('#grid').delegate('.btn-danger', 'click', function (e) {
        var id = $(this).data('id');
        $.$modal.confirm('确定要删除吗?', function (isOk) {
            if (!isOk) return;
            $.$ajax.post('/example/delete/'+id, function (res) {
                $.$modal.alert('删除成功', function () {
                    $('#grid').data('kendoGrid').dataSource.pushUpdate({id: id, deleted: true});
                });
            })
        })
    });

    function getDate(item) {
        return new Date(item.publish.replace(/-/g, '/')).format();
    }

    function getStatus(item) {
        var icon = ['<i class="fa fa-times red"></i>','<i class="fa fa-check green"></i>'];
        return '<div class="text-center">{0}</div>'.format(icon[item.showing]);
    }

    function getIndustry(item) {
        var industry = {
            1: "IT&互联网",
            2: "金融",
            3: "房地产",
            4: "机械制造",
            5: "文件&养老&健康",
            6: "消费品",
        };
        return industry[item.industry];
    }

    $.$ajax.get('/example/json-job-list-data', function (res) {
        $('#grid').data('kendoGrid').dataSource.data(res);
    })
});