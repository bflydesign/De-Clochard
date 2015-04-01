<?php
if (Authentication::login_check() != true) {
    header('location: /login');
}

$title = 'Dashboard';
$style = 'admin';
$view = 'admin.view.php';
$master = 'admin';