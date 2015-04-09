<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="http://images/fblogo.jpg">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="450">
    <meta property="og:image:height" content="440">
    <?php if (isset($title)) { ?>
        <title><?php print $title; ?> | Restaurant De Clochard</title>
    <?php } ?>
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <?php if (isset($stylesheet)) { ?>
        <link rel="stylesheet" href="/css/<?php print $stylesheet; ?>"/>
    <?php } ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="shortcut icon" type="image/png" href="/img/favicon.png"/>
</head>
<body>

<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '1567248980228841',
            xfbml: true,
            version: 'v2.2'
        });
    };

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/nl_NL/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="container container-top">
    <div class="row">
        <div class="col-lg-5 hidden-sm hidden-xs img-nowrap">
            <img src="/img/<?php print isset($image) ? $image : ''; ?>" alt="restaurant de clochard"/>
            <div class="col-lg-12">
                OPENINGSUREN
            </div>
        </div>
        <div class="col-lg-7 col-sm-12">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <img src="/img/logo.png" alt="restaurant de clochard" width="70px"/>
                </div>
                <div class="col-lg-10 col-md-10 nopadding">
                    <nav>
                        <ul>
                            <li><a href="/welkom">welkom</a></li>
                            <li class="toleft"><a href="/over-ons">over ons</a></li>
                            <li><a href="/galerij">galerij</a></li>
                            <li class="toright"><a href="/nieuws">nieuws</a></li>
                            <li><a href="/contact">contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <?php include isset($view) ? $view : ''; ?>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-5"></div>
                <div class="col-lg-7 nopadding">
                    <ul>
                        <li><a href="/welkom">restaurant de clochard</a></li>
                        <li>|</li>
                        <li><address>houtsaegerlaan 44 - 8670 koksijde</address></li>
                        <li>|</li>
                        <li>tel 058/51.38.47</li>
                        <li>|</li>
                        <li><a href="mailto:info@declochard.be">info@declochard.be</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</div>

<div id="fb-root"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
<script src="/js/customValidator.js"></script>
<script src="/js/contactForm.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/fbshare.js"></script>

<script>
    function fbshareCurrentPage() {
        window.open("https://www.facebook.com/sharer/sharer.php?u=" + escape(window.location.href) + "&t=" + document.title, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');
        return false;
    }
</script>

<script>
    window.twttr = (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0],
            t = window.twttr || {};
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "https://platform.twitter.com/widgets.js";
        fjs.parentNode.insertBefore(js, fjs);
        t._e = [];
        t.ready = function (f) {
            t._e.push(f);
        };
        return t;
    }
    (document, "script", "twitter-wjs"));
</script>

</body>
</html>