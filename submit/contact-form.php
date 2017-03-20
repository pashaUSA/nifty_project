<?php
//Defining header as empty
define('FROM_EMAIL', '');
//Recipients
define('TO_EMAIL', 'pashaUSA@gmail.com');

/**
 * Function for sending messages. Checks input fields, prepares message and sends it.
 */
function sendMessage() {
    // Variables init
    $json = array();
    $token = "9320087105434084715";

    // Retrieving content from send data by form.
    // If you don't want to use filter_input you can use direct access to variable using $_POST['<name_input_name>']
    // e.g. $_POST['email']
    $contact_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $contact_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $contact_tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
    $contact_subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
    $contact_message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

    // This field is special, and it's used for anti bot protection.
    $contact_secret = filter_input(INPUT_POST, 'contact_secret', FILTER_SANITIZE_STRING);

    // Decode secret
    $contact_secret = strrev($contact_secret);

    // Token set in JS file have to be the same as in PHP file
    if ($contact_secret !== $token) {
        $json['result'] = 'NO_SPAM';
        header('Access-Control-Allow-Origin: *');
        echo json_encode($json);
        die();
    }

    // Adding e-mail headers
    $headers = "";
    if (FROM_EMAIL !== '') {
        $headers .= 'From: '.FROM_EMAIL."\r\n";
    }
    $headers .= 'Reply-To: '.$contact_email."\r\n";
    $headers .= 'Content-Type: text/html; charset=UTF-8'."\r\n";

    /*
     * Formatting message.
     * It can be customizable in any way you like.
     */
    $title = 'Nifty\'s Tours -- New email from ' . $contact_name;

    $message = '<div style="width: 100%; padding: 24px 0 24px 0; background-color: #fafafa; font-family: \'Helvetica Neue\',Helvetica,Arial,sans-serif;">'
            . '<div>&nbsp;</div>'
            . '<div style="width: 90%; max-width: 680px; min-width: 280px; border: 1px solid #dddddd; background-color: #ffffff; margin: auto;">'
            . '<div>&nbsp;</div>'
            . '<div style="color: #505050; font-size: 13px; padding: 24px;">'
            . '<div>&nbsp;</div>'
            . '<div style="border-bottom: 1px solid #dddddd; margin-bottom: 32px; padding-bottom: 8px; font-size: 30px; line-height: 34px;">'
            . '<img src="http://cas222.work/nifty/images/logo.png" alt="" width="221" height="67" /></div>'
            . '<dl>'
            . '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Subject</dt>'
            . '<dd style="margin: 4px 4px 16px 4px;">' . $contact_subject . '</dd>'
            . '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Name</dt>'
            . '<dd style="margin: 4px 4px 16px 4px;">' . $contact_name . '</dd>'
            . '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Email</dt>'
            . '<dd style="margin: 4px 4px 16px 4px;">' . $contact_email . '</dd>'
            . '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Phone</dt>'
            . '<dd style="margin: 4px 4px 16px 4px;">' . $contact_tel . '</dd>'
            . '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Subject</dt>'
            . '<dd style="margin: 4px 4px 16px 4px;">Email from your website</dd>'
            . '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Message</dt>'
            . '<dd style="margin: 4px 4px 16px 4px;">' . $contact_message . '</dd>'
            . '</dl>'
            . '<div style="border-top: 1px solid #dddddd; margin-top: 32px; padding-top: 8px; font-size: 12px; font-style: italic; color: #707070;">&copy; Nifty\'s Tours tavel agency 2017</div>'
            . '</div>'
            . '</div>'
            . '</div>';
    
    // Mail it!
    $result = mail(TO_EMAIL, $title, $message, $headers);

    // Notify contact form about result of sending.
    if ($result) {
        $json['result'] = 'OK';
    } else {
        $json['result'] = 'SEND_ERROR';
    }
    header('Access-Control-Allow-Origin: *');
    echo json_encode($json);
    die();
}

/**
 * Function for getting visitor's IP address
 * @return string
 */
function getIp() {
    $ip = '';

    if (getenv('HTTP_CLIENT_IP')) {
        $ip = getenv('HTTP_CLIENT_IP');
    } else if(getenv('HTTP_X_FORWARDED_FOR')) {
        $ip = getenv('HTTP_X_FORWARDED_FOR');
    } else if(getenv('HTTP_X_FORWARDED')) {
        $ip = getenv('HTTP_X_FORWARDED');
    } else if(getenv('HTTP_FORWARDED_FOR')) {
        $ip = getenv('HTTP_FORWARDED_FOR');
    } else if(getenv('HTTP_FORWARDED')) {
        $ip = getenv('HTTP_FORWARDED');
    } else if(getenv('REMOTE_ADDR')) {
        $ip = getenv('REMOTE_ADDR');
    } else {
        $ip = 'N/A';
    }

    return $ip;
}

/*
 * Calling a from only when post request is detected (data was sent by form).
 * Otherwise it returns OK, which can be handy with checking that the script is alive.
 */
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    sendMessage();
    die();
} else {
    if (function_exists('mail')) {
        die('OK');
    } else {
        die('PHP parser works, but <b>mail()</b> function seems to doesn\'t exist');
    }

}
?>