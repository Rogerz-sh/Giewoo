/**
 * Created by roger on 15/11/11.
 */
$(function () {
    var today = new Date().format();

    $.$ajax.get('/example/json-job-data/' + $('#id').val(), function (res) {
        console.log(res);
        for (var name in res) {
            switch (name) {
                case 'publish':
                    $('#publish').kendoDatePicker({
                        culture: 'zh-CN',
                        format: 'yyyy-MM-dd',
                        value: Date.format(res[name]),
                        max: today
                    });
                    break;
                case 'industry':
                    $('#industry option[value="{0}"]'.format(res[name])).prop('selected', true);
                    break;
                case 'showing':
                    $('input[name="showing"][value="{0}"]'.format(res[name])).prop('checked', true);
                    break;
                default:
                    $('#'+name).val(res[name]);
            }
        }
        $('select').kendoDropDownList();
        $('[numeric]').kendoNumericTextBox({min: 0, max: 100, spinners: false, format: 'n0'});
    });

    var form = $('#form').$form({
        controls: [
            {
                name: 'id',
                target: '#id',
                type: 'input'
            },
            {
                name: 'job_name',
                target: '#job_name',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '职位名称不能为空'}
                ]
            },
            {
                name: 'company_name',
                target: '#company_name',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '所属企业不能为空'}
                ]
            },
            {
                name: 'work_area',
                target: '#work_area',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '工作地点不能为空'}
                ]
            },
            {
                name: 'publish',
                target: '#publish',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '入职日期不能为空'},
                    {rule: 'date', errMsg: '入职日期格式不正确'}
                ]
            },
            {
                name: 'salary',
                target: '#salary',
                msgBox: 'div.col-xs-8',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '年薪不能为空'},
                    {rule: 'int', errMsg: '年薪必须为数字'}
                ]
            },
            {
                name: 'cost',
                target: '#cost',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '周期不能为空'},
                    {rule: 'int', errMsg: '周期必须为数字'}
                ]
            },
            {
                name: 'industry',
                target: '#industry',
                type: 'select',
                msgBox: 'div.col-xs-8',
                rules: [
                    {rule: 'required', errMsg: '请选择岗位类别'}
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
            $.$ajax.post('/example/edit', {'job': data}, function (res) {
                $.$modal.alert('保存成功', function () {
                    location.href = '/example/';
                });
            });
        }
    });
});