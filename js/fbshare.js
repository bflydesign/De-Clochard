$(document).ready(function () {

    var $numItems = $('.newsitem').length;

    $('a.sharebutton').click(function (e) {
        e.preventDefault();

        var i = $(this).attr('id');
        var link = 'http://www.bflydesign.be/news#newsitem-' + i;
        var caption = $('#news-title-' + i).text();
        var description = $('#news-message-' + i).text();

        FB.ui({
            method: 'feed',
            name: 'Atelier VQ',
            link: link,
            picture: 'http://www.bflydesign.be/img/meat.jpg',
            caption: caption,
            description: description
        });
    });
});