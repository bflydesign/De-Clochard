$(document).ready(function () {

    $('.frmDeleteNews').click(function (e) {
        e.preventDefault();

        var result = confirm("Ben je zeker dat je dit bericht wil verwijderen ?");

        if (result) {
            var id = this.id;

            // -- show preloader
            $('body').toggleClass('loaded');

            $.ajax({
                type: 'POST',
                url: '/ajax',
                data: { hfAction : 'hfDeleteNews', id : id },
                success: function (data) {
                    var result = $.trim(data);
                    if (result == 'true') {
                        // -- go back to page
                        window.location.replace("/news/edit");
                        // -- show alert
                        $('#alert-success').show();
                        // -- back to top
                        $('html, body').animate({scrollTop: 0}, 'slow');
                        // -- hide preloader
                        $('body').toggleClass('loaded');
                    }
                    else if (result == 'false') {
                        // -- alert
                        $('#alert-deleting-error').show();
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