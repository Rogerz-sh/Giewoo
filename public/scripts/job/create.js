/**
 * Created by roger on 15/11/11.
 */
$(function () {
    $('select:not([not-init])').kendoDropDownList();
    $('[numeric]').kendoNumericTextBox({min: 0, max: 100, spinners: false});
});