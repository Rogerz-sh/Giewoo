/**
 * Created by roger on 15/11/11.
 */
$(function () {
    var today = new Date().format(), id = $('#id').val();

    $.$ajax.get('/article/json-article-data/'+id, function (res) {
        for (var name in res) {
            switch (name) {
                case 'publish':
                    $('#publish').kendoDatePicker({
                        culture: 'zh-CN',
                        format: 'yyyy-MM-dd',
                        value: res[name],
                        max: today
                    });
                    break;
                case 'content':
                    $('#content').kendoEditor({
                        value: res[name],
                        domain: document.domain,
                        encoded: false
                    });
                    break;
                case 'type':
                    $('#type option[value="{0}"]'.format(res[name])).prop('selected', true);
                    $('#type').kendoDropDownList();
                    break;
                case 'showing':
                    $('input[name="showing"][value="{0}"]'.format(res[name])).prop('checked', true);
                    break;
                case 'source':
                    $('input[name="source"][value="{0}"]'.format(res[name])).prop('checked', true);
                    break;
                default :
                    $('#'+name).val(res[name]);
            }
        }
    });

    var form = $('#form').$form({
        controls: [
            {
                name: 'id',
                target: '#id',
                type: 'input'
            },
            {
                name: 'title',
                target: '#title',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '文章标题不能为空'}
                ]
            },
            {
                name: 'source',
                target: 'input[name="source"]',
                type: 'radio'
            },
            {
                name: 'author',
                target: '#author',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '作者不能为空'}
                ]
            },
            {
                name: 'publish',
                target: '#publish',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '发布日期不能为空'}
                ]
            },
            {
                name: 'keywords',
                target: '#keywords',
                type: 'input'
            },
            {
                name: 'type',
                target: '#type',
                type: 'select',
                rules: [
                    {rule: 'required', errMsg: '请选择文章所属的类目'}
                ]
            },
            {
                name: 'blockquote',
                target: '#blockquote',
                type: 'textarea'
            },
            {
                name: 'content',
                target: '#content',
                type: 'textarea',
                rules: [
                    {rule: 'required', errMsg: '文章正文不能为空'}
                ]
            },
            {
                name: 'showing',
                target: 'input[name="showing"]',
                type: 'radio'
            },
        ]
    });

    $('button.btn-success').click(function () {
        var data = form.getFormData();
        if (form.validate()) {
            $.$ajax.post('/article/edit', {'article': data}, function (res) {
                $.$modal.alert('保存成功', function () {
                    location.href = '/article/';
                });
            });
        }
    });
});