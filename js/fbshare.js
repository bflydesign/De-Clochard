$(document).ready(function () {

    var $numItems = $('.newsitem').length;

    $('a.sharebutton-news').click(function (e) {
        e.preventDefault();

        var i = $(this).attr('id');
        var link = 'http://www.declochard.be/news#newsitem-' + i;
        var caption = $('#news-title-' + i).text();
        var description = $('#news-message-' + i).text();

        FB.ui({
            method: 'feed',
            name: 'Restaurant De Clochard',
            link: link,
            picture: 'http://www.declochard.be/img/logo.png',
            caption: caption,
            description: description
        });
    });

    $('div.fb-share-button').click(function (e) {
        e.preventDefault();

        FB.ui({
            method: 'share',
            href: 'https://developers.facebook.com/docs/'
        }, function(response){});
    });
});