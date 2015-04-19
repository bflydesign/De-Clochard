<?php
$config = array(

    // -- master
    'template' => array(
        'master' => 'master.master.php',
        'admin' => 'master.admin.php',
        'login' => 'master.login.php'
    ),

    // -- stylesheet
    'stylesheet' => array(
        'master' => 'master.css',
        'admin' => 'dashboard.css'
    ),

    // -- nieuwsberichten
    'news' => array(
        'limit' => 5,
        'number' => 5
    ),

    // -- alerts
    'alerts' => array(
        'input_error' => 'Niet alle velden werden correct ingevuld. Gelieve opnieuw te proberen.',
        'page_success' => 'De paginagegevens werden opgeslagen.',
        'page_error' => 'De paginagegevens konden niet worden opgeslagan, gelieve opnieuw te proberen.',
        'news_success' => 'Het nieuwsbericht werd opgeslagen.',
        'news_error' => 'Het nieuwsbericht kon niet worden opgeslagen, gelieve opnieuw te proberen.'
    ),

    // -- emailadres
    'email' => 'info@declochard.be',

    // -- site
    'site' => 'http://www.declochard.be',
    'site-short' => 'www.declochard.be'
);