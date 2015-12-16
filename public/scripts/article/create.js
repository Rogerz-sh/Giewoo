/**
 * Created by roger on 15/11/11.
 */
$(function () {
    var today = new Date().format();
    $('#type').kendoDropDownList();
    $('#publish').kendoDatePicker({
        culture: 'zh-CN',
        format: 'yyyy-MM-dd',
        value: today,
        max: today
    });
    $('#content').kendoEditor({
        domain: document.domain,
        encoded: false
    });

    var form = $('#form').$form({
        controls: [
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
            $.$ajax.post('/article/create', {'article': data}, function (res) {
                $.$modal.alert('保存成功', function () {
                    location.href = '/article/';
                });
            });
        }
    });
});