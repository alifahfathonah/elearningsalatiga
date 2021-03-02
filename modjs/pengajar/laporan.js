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