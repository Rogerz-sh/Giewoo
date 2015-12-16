(function ($) {
    $.fn.setValidateMessage = function (status, msg, flag, parent) {
        var $this = $(this), $parent = parent || $this.parents('.help-box').length ? $this.parents('.help-box') : $this.parent(), $group = $this.parents('.error-box').length ? $this.parents('.error-box') : $this.parents('.form-group'), flag = flag || 'help-block', $help;
        if ($parent.find('.' + flag).length == 0) {
            $('<span class="' + flag + ' hide"></span>').appendTo($parent);
        }
        $help = $parent.find('.' + flag);
        $help.html(msg);

        if ($group.length > 0) {
            if (status == 0) {
                $group.removeClass('has-error has-success').addClass('has-error');
                if (msg !== '') $help.removeClass('hide');
            } else {
                //$group.removeClass('has-error has-success');
                $help.empty().addClass('hide');
            }
        } else {
            if (status == 0) {
                if (msg !== '') $help.addClass('danger').removeClass('hide');
                $parent.addClass('has-error');
            } else {
                $parent.removeClass('has-error');
                $help.empty().addClass('hide');
            }
        }

        return $this;
    }

    $.$validate = (function () {
        var regExp = {
            email: /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i,
            //url: /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i,
            //url: new RegExp("^((https|http|ftp|rtsp|mms)://)(([0-9a-zA-Z_!~*'().&=+$%-]+: )?[0-9a-z_!~*'().&=+$%-]+@)?(([0-9]{1,3}\.){3}[0-9]{1,3}|([0-9a-zA-Z_!~*'()-]+\.)*([0-9a-zA-Z][0-9a-zA-Z-]{0,61})?[0-9a-zA-Z]\.[a-zA-Z]{2,6})(:[0-9]{1,4})?((/?)|(/[0-9a-zA-Z_!~*'().;?:@&=+$,%#-]+)+/?)$"),
            url: /^(http|https|ftp):\/\/[^\.]+(\.[^\.]+){1,3}\S*[^\.]$/i,

            number: /^-?(?:\d+|\d{1,3}(?:,\d{3})+)(?:\.\d+)?$/,
            int: /^\d+$/,
            float: /^(\d+\.)?\d+$/,
            date: /^((((1[6-9]|[2-9]\d)\d{2})-(0?[13578]|1[02])-(0?[1-9]|[12]\d|3[01]))|(((1[6-9]|[2-9]\d)\d{2})-(0?[13456789]|1[012])-(0?[1-9]|[12]\d|30))|(((1[6-9]|[2-9]\d)\d{2})-0?2-(0?[1-9]|1\d|2[0-8]))|(((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))-0?2-29-))$/,
            mobile: /^(0[0-9]{2,3}\-)?([2-9][0-9]{6,7})+(\-[0-9]{1,4})?$|(^(13[0-9]|15[0|3|6|7|8|9]|18[8|9])\d{8}$)/,
            idcard: /^[1-9]([0-9]{14}|[0-9]{17})$/,
            zipcode: /^\d{6}$/,
            ip: /^(25[0-5]|2[0-4][1-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\.(25[0-5]|2[0-4][1-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\.(25[0-5]|2[0-4][1-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])\.(25[0-5]|2[0-4][1-9]|1[0-9][0-9]|[1-9][0-9]|[0-9])$/,
            color: /^[a-fA-F0-9]{6}$/,
            chinese: /^[\u4E00-\u9FA5\uF900-\uFA2D]+$/,
            unempty: /\S/
        };

        function getChLength(str, cut) {
            var cLen = 0;
            for (var i = 0; i < str.length; i++) {
                var charCode = escape(str.charAt(i));
                if (charCode.length == 6 && charCode.substr(0, 2) == '%u') {
                    cLen += 2;
                } else {
                    cLen += 1;
                }
            }
            if (cut) {
                return Math[cut](cLen / 2);
            } else {
                return Math.ceil(cLen / 2);
            }
        };

        function leftChTrim(str, len) {
            for (var i = 0; i < str.length; i++) {
                if (getChLength(str.substr(0, i)) == len && getChLength(str.substr(0, i + 1)) > len) {
                    return str.substr(0, i);
                }
            }
            return str;
        };

        var $v = myValidate = {
            isRequire: function (value) {
                return !$v.isEmpty(value)
            },
            isNumber: function (value) {
                return regExp['number'].test(value);
            },
            isInt: function (value) {
                return regExp['int'].test(value);
            },
            isFloat: function (value) {
                return regExp['float'].test(value);
            },
            isPercent: function (value) {
                return $v.isInt(value) && $v.isRange(value, [0, 100]);
            },
            isEmail: function (value) {
                return regExp['email'].test(value);
            },
            isUrl: function (value) {
                return regExp['url'].test(value) && value.indexOf('..') < 0;
            },
            isMobile: function (value) {
                return regExp['mobile'].test(value);
            },
            isIdCard: function (value) {
                return regExp['idcard'].test(value);
            },
            isIp: function (value) {
                return regExp['ip'].test(value);
            },
            isZipCode: function (value) {
                return regExp['zipcode'].test(value);
            },
            isColor: function (value) {
                return regExp['color'].test(value);
            },
            isChinese: function (value) {
                return regExp['chinese'].test(value);
            },
            isEmpty: function (value) {
                return !value || !regExp['unempty'].test(value);
            },
            isDate: function (value) {
                return regExp['date'].test(value); // && !/Invalid|NaN/.test(new Date(value))
            },
            isCnLong: function (value, len) {
                return getChLength(value.toString()) >= parseInt(len);
            },
            isCnShort: function (value, len) {
                return getChLength(value.toString()) <= parseInt(len);
            },
            isLong: function (value, len) {
                return value.toString().length >= parseInt(len);
            },
            isShort: function (value, len) {
                return value.toString().length <= parseInt(len);
            },
            isRange: function (value, range) {
                var minVal = range[0], maxVal = range[1];
                return ((!minVal && minVal != 0) || parseFloat(value) >= minVal) && ((!maxVal && maxVal != 0) || parseFloat(value) <= maxVal);
            },
            isFullChar: function (value) {
                for (var i = 0; i < value.length; i++) {
                    var charCode = escape(value.charAt(i));
                    if (charCode.length == 6 && charCode.substr(0, 2) == '%u') {
                        return true;
                    }
                }
                return false;
            },
            regTest: function (value, reg) {
                return window.eval(reg).test(value);
            },
            compareDate: function (sdate, edate) {
                if (!sdate || !edate) return false;
                var sd = new Date(sdate), ed = new Date(edate), d1 = [sd.getFullYear(), sd.getMonth() + 1, sd.getDate()].join('-'), d2 = [ed.getFullYear(), ed.getMonth() + 1, ed.getDate()].join('-');
                return (new Date(d1)).getTime() > (new Date(d2)).getTime() ? false : true;
            }
        }

        return myValidate;
    })();

    $.fn.$form = function (option) {
        var $container = $(this);
        var ctrls = option.controls;

        function ruleValidate(val, rule, check) {
            var result = true, $v = $.$validate;
            if (rule !== 'required' && val === '') return typeof check === 'function' ? check(val) : result;
            switch (rule) {
                case 'required':
                    result = !$v.isEmpty(val);
                    break;
                case 'int':
                    result = $v.isInt(val);
                    break;
                case 'float':
                    result = $v.isFloat(val);
                    break;
                case 'percent':
                    result = $v.isPercent(val);
                    break;
                case 'range':
                    result = $v.isRange(val, check);
                    break;
                case 'email':
                    result = $v.isEmail(val);
                    break;
                case 'url':
                    result = $v.isUrl(val);
                    break;
                case 'mobile':
                    result = $v.isMobile(val);
                    break;
                case 'ip':
                    result = $v.isIp(val);
                    break;
                case 'min-length':
                    result = $v.isLong(val, check);
                    break;
                case 'max-length':
                    result = $v.isShort(val, check);
                    break;
                case 'regexp':
                    result = (new RegExp(check)).test(val);
                    break;
                case 'other':
                    if (typeof check === 'function') {
                        result = check(val);
                    } else {
                        result = val === check;
                    }
                    break;
            }
            return result;
        }

        function checkRules(ctrl) {
            if (!ctrl.rules || ctrl.rules.length == 0) return true;
            var element = $(ctrl.target, $container), parent = ctrl.msgBox ? element.parents(ctrl.msgBox).eq(0) : null, errCount = 0;
            for (var i = 0; i < ctrl.rules.length; i++) {
                var rule = ctrl.rules[i];
                var result = ruleValidate(getValue(ctrl), rule.rule, rule.check);
                element.setValidateMessage(result, rule.errMsg, option.helpStyle, parent);
                if (!result) {
                    errCount++;
                    break;
                }
            }
            return errCount > 0 ? false : true;
        }

        function getValue(obj) {
            var target = obj.target, type = obj.type, val = obj.val;
            var elementVal = {
                'input': function (target) {
                    return $(target, $container).val();
                },
                'select': function (target) {
                    return $(target, $container).val();
                },
                'radio': function (target) {
                    return $(target + ':checked', $container).val();
                },
                'checkbox': function (target) {
                    var vals = [];
                    $(target + ':checked', $container).each(function (i, item) {
                        vals.push($(item).val());
                    });
                    return vals.join(',');
                },
                'textarea': function (target) {
                    return $(target, $container).val();
                },
                'other': function () {
                    return val();
                }
            }
            return elementVal[type](target);
        }

        var rtn = {
            validate: function () {
                var errCount = 0;
                $container.find('div.form-group').removeClass('has-error has-success');
                for (var i = 0; i < ctrls.length; i++) {
                    if (!checkRules(ctrls[i])) errCount++;
                }
                return errCount > 0 ? false : true;
            },
            resetValidate: function () {
                $container.find('div.form-group').removeClass('has-error has-success');
                for (var i = 0; i < ctrls.length; i++) {
                    var ctrl = ctrls[i], element = $(ctrl.target, $container), parent = ctrl.msgBox ? element.parents(ctrl.msgBox) : null;
                    element.setValidateMessage(1, '', option.helpStyle, parent);
                }
            },
            getFormData: function () {
                var data = {};
                for (var i = 0; i < ctrls.length; i++) {
                    if (!ctrls[i].name) {
                        throw Error('target %s need a name to save data.', ctrls[i].target);
                        break;
                    }
                    data[ctrls[i].name] = getValue(ctrls[i]);
                }
                return data;
            }
        };

        $container.data('form', rtn);

        return rtn;
    }

    /*
     $.fn.hdtForm(option)
     option: object
     表单配置对象

     examples:
     var form = $('form').hdtForm({
     controls: [
     {
     name: 'userName',
     target: '#username',
     type: 'input',
     rules: [
     { rule: 'required', errMsg: '用户名不能为空' },
     { rule: 'email', errMsg: '邮箱格式不正确' },
     { rule: 'other', check: specialCheck, errMsg: '邮箱必须以@@hdtmedia.com结尾' }
     ]
     },
     {
     name: 'userPassword',
     target: '#userpassword',
     type: 'input',
     rules: [
     { rule: 'required', errMsg: '密码不能为空' },
     { rule: 'regexp', check: /^\d+$/, errMsg: '密码必须为数字' },
     { rule: 'min-length', check: 6, errMsg: '密码不能小于6个字符' },
     { rule: 'max-length', check: 20, errMsg: '密码不能大于20个字符' },
     { rule: 'other', check: '123456789', errMsg: '密码不正确' }
     ]
     }
     ]
     });

     function specialCheck(val) {
     var chkArr = val.split('@@hdtmedia.com');
     if (chkArr.length !== 2 || chkArr[1] !== '') return false;
     return true;
     }

     form.validate()     //验证表单
     form.getFormData()  //获取表单数据

     option.controls: array
     表单控件对象集合

     option.controls.name: string
     表单保存getFormData()输出data对象时需要此属性

     option.controls.target: string
     jQuery的selector字符串，用来指向对应的表单控件

     option.controls.type: string
     input | select | radio | checkbox | other
     表单控件的类型

     option.controls.validate.rule: string
     required | min-length | max-length | range | int | float | percent | mobile | ip | tel | email | url | regexp
     表单各个控件的验证规则类型

     option.controls.validate.check: int | array | string | function
     当rule为min-length或max-length时，check值为int，指定最大或最小长度
     当rule为range时，check为array，指定数值范围，如[10, 50]或[8.8, 88.8]

     option.controls.validate.errMsg: string
     对应的rule验证不通过时的提示文字
     */
})(jQuery)