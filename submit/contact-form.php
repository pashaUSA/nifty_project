<?php
//Defining header as empty
define('FROM_EMAIL', 'Nifty\'s Travel<noreply@niftystours.com>');
//Recipients
define('TO_EMAIL', 'pashaUSA@gmail.com');

$errorMSG = "";

/**
 * Function for sending messages. Checks input fields, prepares message and sends it.
 */
// Variables init
$json = array();

// Retrieving content from send data by form.
// If you don't want to use filter_input you can use direct access to variable using $_POST['<name_input_name>']
// e.g. $_POST['email']
$contact_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$contact_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$contact_tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
$contact_subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$contact_message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

if (empty($contact_name)) {
    $errorMSG = "Name is required";
}
if (empty($contact_email)) {
    $errorMSG = "Email is required";
}
if ($contact_subject == 'Not Selected') {
    $errorMSG = "Please select the Subject for your message";
}
if (empty($contact_message )) {
    $errorMSG = "Message is required";
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
    . '<img src="http://cas222.work/nifty/images/logo.png" alt="" width="100" height="100" /></div>'
    . '<dl>'
    . '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Name</dt>'
    . '<dd style="margin: 4px 4px 16px 4px;">' . $contact_name . '</dd>'
    . '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Email</dt>'
    . '<dd style="margin: 4px 4px 16px 4px;">' . $contact_email . '</dd>'
    . '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Phone</dt>'
    . '<dd style="margin: 4px 4px 16px 4px;">' . $contact_tel . '</dd>'
    . '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Subject</dt>'
    . '<dd style="margin: 4px 4px 16px 4px;">' . $contact_subject . '</dd>'
    . '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Message</dt>'
    . '<dd style="margin: 4px 4px 16px 4px;">' . $contact_message . '</dd>'
    . '</dl>'
    . '<div style="border-top: 1px solid #dddddd; margin-top: 32px; padding-top: 8px; font-size: 12px; font-style: italic; color: #707070;">&copy; Nifty\'s Tours tavel agency 2017</div>'
    . '</div>'
    . '</div>'
    . '</div>';

// Mail it!
$result = mail(TO_EMAIL, $title, $message, $headers);

include_once "connection.php";

// SQL STATEMENT

$sql="INSERT INTO tbl_mail(name, email, phone, subject, message)"
. " VALUES('$contact_name', '$contact_email', '$contact_tel', '$contact_subject', '$contact_message');"; 

// Run a query
try {
    $result = $connection->query($sql);
} 
catch (PDOException $e) {
    die('<div class="box-warning"><strong>3.</strong> Query failed! ' . $e->getMessage() . '</div>');
}

// Notify contact form about result of sending.
if ($result && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}


?>