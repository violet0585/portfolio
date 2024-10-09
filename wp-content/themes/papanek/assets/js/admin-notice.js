jQuery(document).ready(function($) {
    $('#papanek-notice .notice-dismiss').on('click', function() {
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'papanek_dismiss_notice'
            }
        });
    });
});