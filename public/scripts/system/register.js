/**
 * Created by roger on 15/11/16.
 */
$(function () {
    $('body').addClass('padding-top-60');

    $('#form').$form({
        controls: [
            {
                name: 'nickname',
                target: '#nickname',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '邮箱不能为空'}
                ]
            },
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
                    {rule: 'required', errMsg: '登录密码不能为空'},
                    {rule: 'regexp', check: /^[a-z]{1}[0-9a-zA-Z]{5,19}$/, errMsg: '登录密码必须以字母开头，且长度在6-20之间'}
                ]
            },
            {
                name: 'password2',
                target: '#password2',
                type: 'input',
                rules: [
                    {rule: 'required', errMsg: '重复密码不能为空'},
                    {rule: 'other', check: checkPassword, errMsg: '请与登录密码保持一致'}
                ]
            },
            {
                name: 'readme',
                target: 'input[name="readme"]',
                type: 'checkbox',
                rules: [
                    {rule: 'required', errMsg: '请勾选以上复选框'}
                ]
            }
        ]
    });

    function checkPassword(val) {
        return val === $('#password').val();
    }

    $('#register').click(function () {
        var form = $('#form').data('form');
        if (form.validate()) {
            var data = form.getFormData();
            console.log(data);
            $.$ajax.post('/system/register', data, function (res) {
                if (res.status) {
                    $.$modal.alert('恭喜你，注册成功！', function () {
                        location.href = '/system/login';
                    });
                } else {
                    $.$modal.alert(res.err_msg);
                }
            });
        }
    });

    $('#backward').click(function () {
        location.href = '/system/login';
    });
});