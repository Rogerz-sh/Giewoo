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
    //$('#content').kendoEditor({
    //    domain: document.domain,
    //    encoded: false
    //});
    $('#upload').kendoUpload({
        async: {
            saveUrl: '/page/upload/?_token='+$('meta[name="_token"]').attr('content'),
            saveField: 'file'
        },
        multiple: false,
        upload: function (e) {
            var files = e.files;
            $.each(files, function (i, file) {
                if (['.jpg', '.png', '.gif'].indexOf(file.extension.toLowerCase()) < 0) {
                    $.$modal.alert('文件格式不符合要求');
                    e.preventDefault();
                }
            });
        },
        success: function (e) {
            var res = e.response;
            $('#picture').val(res);
        },
        error: function (e) {
            $('#picture').val('');
        }
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
                name: 'date',
                target: '#date',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '发布日期不能为空'}
                ]
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
                name: 'picture',
                target: '#picture',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '插图不能为空'}
                ]
            },
            {
                name: 'content',
                target: '#content',
                type: 'textarea',
                rules: [
                    {rule: 'required', errMsg: '文章正文不能为空'}
                ]
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