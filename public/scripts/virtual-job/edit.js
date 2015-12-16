/**
 * Created by roger on 15/11/11.
 */
$(function () {


    $.$ajax.get('/virtual-job/json-job-data/' + $('#id').val(), function (res) {
        console.log(res);
        for (var name in res) {
            switch (name) {
                case 'req_age':
                    var age = res[name].match(/\d+/g);
                    if (age) {
                        $('#age_from').val(age[0] || '');
                        $('#age_to').val(age[1] || '');
                    }
                    break;
                case 'req_degree':
                    $('#req_degree option[value="{0}"]'.format(res[name])).prop('selected', true);
                    break;
                case 'req_sex':
                    $('input[name="req_sex"][value="{0}"]'.format(res[name])).prop('checked', true);
                    break;
                case 'years':
                    var years = res[name].match(/\d+/g);
                    if (years) {
                        $('#years_from').val(years[0] || '');
                        $('#years_to').val(years[1] || '');
                    }
                    break;
                case 'salary':
                    var salary = res[name].match(/\d+/g);
                    if (salary) {
                        $('#salary_from').val(salary[0] || '');
                        $('#salary_to').val(salary[1] || '');
                    }
                    break;
                case 'industry':
                    $('#industry option[value="{0}"]'.format(res[name])).prop('selected', true);
                    break;
                case 'number':
                    var number = res[name].match(/\d+/g);
                    if (number) {
                        $('#number').val(number[0] || '');
                    }
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
                name: 'salary',
                target: '#salary_from',
                msgBox: 'div.col-xs-8',
                type: 'other',
                val: function () {
                    var s1 = $('#salary_from').val(), s2 = $('#salary_to').val();
                    if (_.isEmpty(s1)) {
                        return '面议';
                    } else {
                        if (_.isEmpty(s2)) {
                            return s1 + '万';
                        } else {
                            return s1 + '-' + s2 + '万';
                        }
                    }
                },
                rules: [
                    {rule: 'required', errMsg: '年薪不能为空'}
                ]
            },
            {
                name: 'years',
                target: '#years_from',
                msgBox: 'div.col-xs-8',
                type: 'other',
                val: function () {
                    var s1 = $('#years_from').val(), s2 = $('#years_to').val();
                    if (_.isEmpty(s1)) {
                        return '不限';
                    } else {
                        if (_.isEmpty(s2)) {
                            return s1 + '年以上';
                        } else {
                            return s1 + '-' + s2 + '年';
                        }
                    }
                },
                rules: [
                    {rule: 'required', errMsg: '工作年限不能为空'}
                ]
            },
            {
                name: 'req_age',
                target: '#age_from',
                msgBox: 'div.col-xs-8',
                type: 'other',
                val: function () {
                    var s1 = $('#age_from').val(), s2 = $('#age_to').val();
                    if (_.isEmpty(s1)) {
                        return '不限';
                    } else {
                        if (_.isEmpty(s2)) {
                            return s1 + '岁以上';
                        } else {
                            return s1 + '-' + s2 + '岁';
                        }
                    }
                },
                rules: [
                    {rule: 'required', errMsg: '年龄要求不能为空'}
                ]
            },
            {
                name: 'number',
                target: '#number',
                type: 'other',
                val: function () {
                    var num = $('#number').val();
                    if (_.isEmpty(num)) {
                        return '若干';
                    } else {
                        return num + '人';
                    }
                },
                rules: [
                    {rule: 'required', errMsg: '招聘人数不能为空'}
                ]
            },
            {
                name: 'req_degree',
                target: '#req_degree',
                type: 'select'
            },
            {
                name: 'req_sex',
                target: 'input[name="req_sex"]',
                type: 'radio',
                msgBox: 'div.col-xs-8'
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
                name: 'job_desc',
                target: '#job_desc',
                type: 'textarea',
                rules: [
                    {rule: 'required', errMsg: '岗位职责不能为空'}
                ]
            },
            {
                name: 'job_requires',
                target: '#job_requires',
                type: 'textarea',
                rules: [
                    {rule: 'required', errMsg: '任职要求不能为空'}
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
            $.$ajax.post('/virtual-job/edit', {'job': data}, function (res) {
                $.$modal.alert('保存成功', function () {
                    location.href = '/virtual-job/';
                });
            });
        }
    });
});