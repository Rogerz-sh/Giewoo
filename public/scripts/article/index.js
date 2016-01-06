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
            {field: 'title', title: '文章标题'},
            {field: 'type', title: '所属类目', template: getType},
            {field: 'showing', title: '首页显示', template: getStatus},
            {field: 'publish', title: '发布日期', template: '#:Date.format(publish)#'},
            {field: 'source', title: '来源', template: getSource},
            {field: 'updated_at', title: '更新时间', template: '#:Date.format(updated_at)#'},
            {title: '操作', template: '<a href="/article/edit/#:id#" class="btn btn-default btn-sm"><i class="fa fa-pencil"></i></a> ' +
            '<a href="/site/article/#:id#" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-search"></i></a> ' +
            '<a data-id="#:id#" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>', width: 140}
        ],
        scrollable: false,
        pageable: true,
    });

    $('#grid').delegate('.btn-danger', 'click', function (e) {
        var id = $(this).data('id');
        $.$modal.confirm('确定要删除吗?', function (isOk) {
            if (!isOk) return;
            $.$ajax.post('/article/delete/'+id, function (res) {
                $.$modal.alert('删除成功', function () {
                    $('#grid').data('kendoGrid').dataSource.pushUpdate({id: id, deleted: true});
                });
            })
        })
    });

    function getSource(item) {
        if (item.source == '原创') {
            return '<span class="text-primary">{0}</span>'.format(item.source);
        } else {
            return item.source;
        }
    }

    function getStatus(item) {
        var icon = ['<i class="fa fa-times red"></i>','<i class="fa fa-check green"></i>'];
        return '<div class="text-center">{0}</div>'.format(icon[item.showing]);
    }

    function getType(item) {
        var type = {
            1: "走近猎头",
            2: "HR资讯",
            3: "职场动态",
        };
        return type[item.type];
    }

    $.$ajax.get('/article/json-article-list-data', function (res) {
        $('#grid').data('kendoGrid').dataSource.data(res);
    })
});