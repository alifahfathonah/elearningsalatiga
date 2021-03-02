(function() {
    $(document).ready(function() {
        $('.switch-input').on('change', function() {
            let isChecked = $(this).is(':checked');
            let selectedData;
            let $switchLabel = $('.switch-label');

            if (isChecked) {
                selectedData = $switchLabel.attr('data-on');
            } else {
                selectedData = $switchLabel.attr('data-off');
            }
        });

        // Params ($selector, boolean)
        function setSwitchState(el, flag) {
            el.attr('checked', flag);
        }

        // Usage
        setSwitchState($('.switch-input'), true);
    });

})();

function onlyNumbers(event) {
    if (event.type == "paste") {
        var clipboardData = event.clipboardData || window.clipboardData;
        var pastedData = clipboardData.getData('Text');
        if (isNaN(pastedData)) {
            event.preventDefault();

        } else {
            return;
        }
    }
    var keyCode = event.keyCode || event.which;
    if (keyCode >= 96 && keyCode <= 105) {
        // Numpad keys
        keyCode -= 48;
    }
    var charValue = String.fromCharCode(keyCode);
    if (isNaN(parseInt(charValue)) && event.keyCode != 8) {
        event.preventDefault();
    }
}
// Javascript untuk memanggil fungsi datapicker
$(function() {
    $(".datepicker").datepicker({
        format: "dd MM yyyy",
        autoclose: true,
        todayHighlight: true,
    });
});