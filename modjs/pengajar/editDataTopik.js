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

        let getStatus = document.getElementById('terb').value;
        if (getStatus == 'Ya') {
            setSwitchState($('.switch-input'), true);
        } else {
            setSwitchState($('.switch-input'), false);
        }
        // Usage
    });

})();