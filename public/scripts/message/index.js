/**
 * Created by roger on 15/12/8.
 */
$(function () {
    $('#grid').kendoGrid({
        dataSource: {
            data: [],
            pageSize: 5,
            schema: {
                model: {
                    id: 'id'
                }
            },
            filter: {field: 'deleted', operator: 'neq', value: true}
        },
        columns: [
            {field: 'id', title: 'ID'},
            {field: 'name', title: '姓名'},
            {field: 'tel', title: '电话'},
            {field: 'email', title: '邮箱'},
            {field: 'created_at', title: '留言日期', template: getDate},
            {field: 'replied', title: '已处理', template: '#:["未处理", "已处理"][replied]#'},
            {title: '操作', template: '<a href="/site/article/#:id#" target="_blank" class="btn btn-info btn-sm"><i class="fa fa-search"></i></a> ' +
            '<a data-id="#:id#" class="btn btn-warning btn-sm"><i class="fa fa-reply"></i></a> ' +
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

    function getDate(item) {
        return new Date(item.created_at.replace(/-/g, '/')).format();
    }

    $.$ajax.get('/message/json-message-list-data', function (res) {
        $('#grid').data('kendoGrid').dataSource.data(res);
    })
});