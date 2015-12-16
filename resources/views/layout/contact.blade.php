<div id="contact">
    <div class="wrap ">
        <h2 class="text-center orange">联系我们</h2>
        <hr class="border-color-orange">
        <div class="col-xs-6">
            <h4 class="orange">即沃中国：上海 北京 广州 杭州 南京 苏州 成都 青岛</h4>
            <p class="orange margin-top-30">上海办公室地址：上海黄浦区北京东路666号科技京城西楼30楼</p>
            <p class="orange">咨询热线：400-670-7725</p>
        </div>
        <div class="col-xs-6" id="contact-form">
            <div class="col-xs-5">
                <p id="input_user"><input type="text" id="name" maxlength="50" class="form-control border-color-orange" value="您的姓名" onfocus="if (this.value =='您的姓名'){this.value =''}" onblur="if (this.value ==''){this.value='您的姓名'}"></p>
                <p id="input_email"><input type="text" id="email" maxlength="100" class="form-control border-color-orange" value="您的E-Mail" onfocus="if (this.value =='您的E-Mail'){this.value =''}" onblur="if (this.value ==''){this.value='您的E-Mail'}"></p>
                <p id="input_phone"><input type="text" id="tel" maxlength="20" class="form-control border-color-orange" value="您的联系方式" onfocus="if (this.value =='您的联系方式'){this.value =''}" onblur="if (this.value ==''){this.value='您的联系方式'}"></p>
            </div>
            <div class="col-xs-7 no-padding-left no-padding-right">
                <p id="input_message"><textarea name="message" id="message" maxlength="500"  class="form-control border-color-orange" value="" onfocus="if (this.value =='请输入您的留言内容...'){this.value =''}" onblur="if (this.value ==''){this.value='请输入您的留言内容...'}">请输入您的留言内容...</textarea></p>
            </div>
            <div class="col-xs-12 no-padding-right">
                <button class="btn btn-primary btn-sm full-size border-color-orange yellow" id="submit_message"><i class="fa"></i> 提交留言</button>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        $('#submit_message').click(function () {
            var self = $(this),
                    name = $('#name', '#contact-form').val(),
                    tel = $('#tel', '#contact-form').val(),
                    email = $('#email', '#contact-form').val(),
                    message = $('#message', '#contact-form').val();
            if (_.isEmpty(name) || _.isEmpty(tel) || _.isEmpty(email) || _.isEmpty(message)) {
                $.$modal.alert('表格尚未填写完整，请核对后重新提交');
                return;
            }
            var data = {name: name, tel: tel, type: '', email: email, message: message};
            self.find('i').addClass('fa-spinner fa-spin');
            $.$ajax.post('/site/create-message', {message: data}, function (res) {
                $.$modal.alert('提交成功', function () {
                    $('#name', '#contact-form').val('');
                    $('#tel', '#contact-form').val('');
                    $('#email', '#contact-form').val('');
                    $('#message', '#contact-form').val('');
                    self.find('i').removeClass('fa-spinner fa-spin');
                })
            });
        });
    })
</script>