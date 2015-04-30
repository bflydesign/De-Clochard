<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="http://www.bflydesign.be/img/fbshare.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="960">
    <meta property="og:image:height" content="640">

    <meta name="description" content="lekker eten in een gezellig kader in restaurant De Clochard in Koksijde">
    <meta name="keywords" content="restaurant, koksijde, oostduinkerke, clochard, culinair, menu, eten, diner, nachtrestaurant, gezellig, parking, banketten, kinderen, terras, kust ">
    <meta name="author" content="pepaslife creations">
    <meta name="robots" content="nofollow">
    <?php if (isset($title)) { ?>
        <title><?php print $title; ?> | Restaurant De Clochard</title>
    <?php } ?>
    <link rel="icon" type="image/png" href="/img/favicon.png"/>
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="/css/font-awesome.min.css" rel="stylesheet"/>
    <?php if (isset($stylesheet)) { ?>
        <link rel="stylesheet" href="/css/<?php print $stylesheet; ?>"/>
    <?php } ?>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="/components/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="/components/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <link rel="stylesheet" href="/components/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />

    <?php include_once 'lib/analyticstracking.php'; ?>
</head>
<body>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function () {
        FB.init({
            appId: '677772202335119',
            xfbml: true,
            version: 'v2.3'
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

<?php include_once('lib/analyticstracking.php'); ?>

<div class="container container-top">
    <div class="row">
        <div class="col-lg-5 hidden-sm hidden-xs img-nowrap">
            <div class="col-lg-12" id="share">
                <div class="fb-share-button" data-href="https://www.declochard.be" data-layout="button"></div>
            </div>
            <img src="/img/<?php print isset($image) ? $image : ''; ?>" alt="restaurant de clochard"/>
            <div class="col-lg-12" id="openingsuren">
                <h3>OPENINGSUREN</h3>
                <div class="row top-buffer">
                    <div class="col-lg-1 fa fa-clock-o fa-lg"></div>
                    <div class="col-lg-11 font-medium">
                        <p>Keuken open van 18 tot 24u</p>
                        <p>Op zon- en feestdagen ook 's middags open</p>
                    </div>
                </div>
                <div class="row top-buffer">
                    <div class="col-lg-1 fa fa-close fa-lg"></div>
                    <div class="col-lg-11 font-medium">
                        <p>Gesloten op maandag en dinsdag</p>
                        <p>In de vakanties enkel gesloten op maandag</p>
                    </div>
                </div>
                <div class="row top-buffer">
                    <div class="col-lg-1 fa fa-phone fa-lg"></div>
                    <div class="col-lg-11 font-medium">
                        <p>058/51.38.47</p>
                    </div>
                </div>
                <div class="row top-buffer">
                    <div class="col-lg-1 fa fa-home fa-lg"></div>
                    <div class="col-lg-11 font-medium">
                        <address>
                            <p>Houtsaegerlaan 44 - 8670 Koksijde</p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-sm-12">
            <div class="row">
                <div class="col-lg-2 col-md-2 hidden-xs">
                    <img src="/img/logo.png" alt="restaurant de clochard" width="70px"/>
                </div>
                <div class="col-lg-10 col-md-10 nopadding">
                    <?php include('views/navigation.master.php'); ?>
                </div>
            </div>
            <?php include isset($view) ? $view : ''; ?>
        </div>
    </div>
    <?php include_once('views/footer.view.php'); ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
<!-- FANCYBOX -->
<!-- Add mousewheel plugin (this is optional) -->
<script src="/components/fancybox/source/jquery.mousewheel-3.0.6.pack.js"></script>
<!-- Add fancyBox -->
<script src="/components/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<!-- Optionally add helpers - button, thumbnail and/or media -->
<script src="/components/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script src="/components/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script src="/components/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>

<script src="/js/customValidator.js"></script>
<script src="/js/contactForm.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/fbshare.js"></script>

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