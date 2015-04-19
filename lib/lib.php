<?php
// -- isNullOrEmpty
function isNullOrEmpty($field)
{
    $field = trim($field);
    if (isset($field)) {
        if ($field != '' && $field != null) {
            return false;
        } else {
            return true;
        }
    } else {
        return true;
    }
}

// -- get img from directory
function getImages($dir)
{
    $dir =  $dir . '/';
    if (file_exists($dir)) {
        $files = glob($dir . '*.{jpg,png,gif}', GLOB_BRACE);
    }
    return $files;
}

function generatePassword($password)
{
    // Create a random salt
    $salt = generateSalt();
    // Create salted password (Careful not to over season)
    $password = hash('sha512', $password . $salt);

    return $return_values = array('salt' => $salt, 'password' => $password);
}

function generateRandomPassword()
{
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function generateSalt()
{
    $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
    return $random_salt;
}

function sec_session_start()
{
    // Set a custom session name
    $session_name = 'sec_session_id';
    //Set to true if using https.
    $secure = false;
    // This stops javascript being able to access the session id.
    $httponly = true;
    // Forces sessions to only use cookies.
    ini_set('session.entropy_file', '/dev/urandom');
    ini_set('session.entropy_length', '512');
    ini_set('session.use_only_cookies', 1);
    // Gets current cookies params.
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams['lifetime'],
        $cookieParams['path'],
        $cookieParams['domain'],
        $secure,
        $httponly);
    // Sets the session name to the one set above.
    session_name($session_name);
    // Start the php session
    session_start();
    // regenerated the session, delete the old one.
    //session_regenerate_id(true);
}