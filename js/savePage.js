$(document).ready(function () {

    $('#frmPage').submit(function (e) {
        e.preventDefault();

        // -- reset alerts
        resetAlerts();
    });

    // -- form validation
    $.validate({
        form: '#frmPage',
        language: nederlands,
        onError: function () {
            // -- show alert
            $('#alert-input-error').show();
            // -- back to top
            $('html, body').animate({scrollTop: 0}, 'slow');
        },
        onSuccess: function () {
            // -- show preloader
            $('body').toggleClass('loaded');
            $.ajax({
                type: 'POST',
                url: '/ajax',
                data: $('#frmPage').serialize(),
                success: function (data) {
                    var result = $.trim(data);
                    if (result == 'success') {
                        // -- show alert
                        $('#alert-success').show();
                        // -- back to top
                        $('html, body').animate({scrollTop: 0}, 'slow');
                        // -- hide preloader
                        $('body').toggleClass('loaded');
                        // -- remove alert
                        $('#alert-success').fadeOut(8000, function () {
                            $(this).hide();
                        });
                    }
                    else if (result == 'error_saving') {
                        // -- alert
                        $('#alert-saving-error').show();
                        // -- back to top
                        $('html, body').animate({scrollTop: 0}, 'slow');
                        // -- hide preloader
                        $('body').toggleClass('loaded');
                    }
                }
            });
        }
    });
});