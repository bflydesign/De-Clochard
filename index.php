<?php
// -- config
require 'config.php';

// -- lib
include 'lib/lib.php';

sec_session_start();

/*if (!isset($_SESSION['counter']))
    $_SESSION['counter']=0;
echo "Refreshed ".$_SESSION['counter']++." times.<br>
<a href=".$_SERVER['PHP_SELF'].'?'.session_name().'='.session_id().">refresh</a>";*/

// -- models
require 'models/db.class.php';
require 'models/authentication.class.php';
require 'models/passwordRequest.class.php';
require 'models/loginAttempts.class.php';
require 'models/user.class.php';
require 'models/page.class.php';
require 'models/news.class.php';

// -- router
include 'router/router.php';

// -- routering
$url = isset($_GET['url']) ? $_GET['url'] : 'welkom';

if(!array_key_exists($url, $router)) {
    header('location: /home');
    exit;
}

include 'controllers/' . $router[$url];

if (isset($style)) {
    $stylesheet = $config['stylesheet'][$style];
}

if ($url != 'ajax') {
    // -- include master
    if (isset($master)) {
        include 'views/' . $config['template'][$master];
    }
}