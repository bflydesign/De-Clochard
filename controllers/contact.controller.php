<?php
require 'models/Xsrf_guard.php';
require 'models/PHPMailerAutoload.php';
require_once 'models/recaptchalib.php';

// XSRF-defense
$xsrf_guard = new Xsrf_guard();
$xsrf_guard->key('topsecret'); # your unique, secret key
# $xg->userdata( $uid ); # OPTIONAL: user-specific data for extra protection
# $xg->timeout( 3600 ); # OPTIONAL: timeout. in seconds, default is 900.

// RECAPTCHA
// Register API keys at https://www.google.com/recaptcha/admin
$siteKey = "6LfMXgMTAAAAAJFDttyZv8XT3_uNESR69m01vs6J";
$secret = "6LfMXgMTAAAAAN8POuP7peFetmb6A6ub2kgq7eH";

// reCAPTCHA supported 40+ languages listed here: https://developers.google.com/recaptcha/docs/language
$lang = "nl";

// The response from reCAPTCHA
$resp = null;
// The error code from reCAPTCHA, if any
$error = null;

$reCaptcha = new ReCaptcha($secret);

// MAILING
$success = null;

if (isset($_POST['hfAction']) && $_POST['hfAction'] == 'hfSendMail')
{
    // Was there a reCAPTCHA response?
    if ($_POST["g-recaptcha-response"])
    {
        $resp = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);

        if ($resp != null && $resp->success)
        {
            # obviously this is just a demo and not for production
            if ($xsrf_guard->is_valid($_POST))
            {
                $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : 'nn';
                $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : 'nn';
                $email = isset($_POST['email']) ? trim($_POST['email']) : 'nn';
                $confirm_email = isset($_POST['confirm_email']) ? trim($_POST['confirm_email']) : 'nn';
                $telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : '';
                $subject = isset($_POST['subject']) ? trim($_POST['subject']) : 'geen onderwerp';
                $message = isset($_POST['message']) ? nl2br(trim($_POST['message'])) : 'geen bericht';


                $mail = new PHPMailer();

                $mail->isMail();

                $mail->From = 'info@declochard.be';
                $mail->FromName = $firstname . ' ' . $lastname;
                $mail->addAddress('bart.clarebout@gmail.com');
                $mail->addReplyTo($email, $firstname . ' ' . $lastname);
                $mail->addCC($email);

                $mail->isHTML(true);                                  // Set email format to HTML

                $mail->Subject = $subject;
                $mail->Body = <<<EOT
<h1>Je hebt een bericht ontvangen via het formulier op de website</h1>
<br/>
<br/>
<hr/>
<br/>
<br/>
<div style="border: 1px solid black; padding: 20px;">
    <b>Van: </b>$firstname $lastname<br/><br/>
    <b>E-mail: </b>$email<br/><br/>
    <b>Tel: </b>$telephone<br/><br/>
    <b>Onderwerp: </b>$subject<br/><br/>
    <b>Bericht:</b><br/>
    <p>$message</p>
</div>
EOT;
                $mail->AltBody = <<<EOT
U hebt een bericht van $firstname $lastname ontvangen via de website.
E-mail: $email
Tel: $telephone
Onderwerp: $subject
Bericht: $message
EOT;

                if (!$mail->send()) {
                    $error[] = $mail->ErrorInfo;
                } else {
                    $success = 'De mail werd goed verstuurd';
                    header('location: /contact#focus');
                }
            } else {
                $error[] = $xsrf_guard->error();
            }
        } else {
            $error[] = $reCaptcha->errorCodes;
        }
    } else {
        $error[] = 'Geen recaptcha-response';
    }
}

// -- get pagevariables
$page = new Page($url);
$title = $page->getTitle();
$style = 'master';
$image = 'img_contact.png';

// -- views
$view = 'contact.view.php';
$master = 'master';