<?php
if (Authentication::login_check() == true) {
    header ('location: /dashboard');
}

$title = 'Login';
$master = 'login';