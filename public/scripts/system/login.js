/**
 * Created by roger on 15/10/26.
 */
$(function () {
    $('.tab').click(function () {
        var target = $(this).data('target');
        $(this).addClass('active').siblings('.tab').removeClass('active');
        $('.tab-content').removeClass('active');
        $('#' + target).addClass('active');
    });

    $('#form').$form({
        controls: [
            {
                name: 'name',
                target: '#name',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '用户名不能为空'}
                ]
            },
            {
                name: 'password',
                target: '#password',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '密码不能为空'}
                ]
            }
        ]
    });

    $('#submit').click(function () {
        var form = $('#form').data('form');
        if (form.validate()) {
            var data = form.getFormData();
            $.$ajax.post('/system/login', data, function (res) {
                if (res.status) {
                    location.href = '/manager';
                } else {
                    $.$modal.alert(res.err_msg)
                }
            });
        }
    });
});
