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

        let getStatus = document.getElementById('blok').value;
        if (getStatus == 'Ya') {
            setSwitchState($('.switch-input'), true);
        } else {
            setSwitchState($('.switch-input'), false);
        }
        // Usage
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