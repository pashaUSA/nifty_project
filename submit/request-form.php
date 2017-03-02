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
$request_name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$request_email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$request_tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
$request_trip_name = filter_input(INPUT_POST, 'tripName', FILTER_SANITIZE_STRING);
$request_translator = filter_input(INPUT_POST, 'translator', FILTER_SANITIZE_STRING);
$request_language = filter_input(INPUT_POST, 'language', FILTER_SANITIZE_STRING);
$request_startdate = filter_input(INPUT_POST, 'startdate', FILTER_SANITIZE_STRING);
$request_enddate = filter_input(INPUT_POST, 'enddate', FILTER_SANITIZE_STRING);
$request_number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
$request_message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

// Adding e-mail headers
$headers = "";
if (FROM_EMAIL !== '') {
	$headers .= 'From: '.FROM_EMAIL."\r\n";
}
$headers .= 'Reply-To: '.$request_email."\r\n";
$headers .= 'Content-Type: text/html; charset=UTF-8'."\r\n";

/*
 * Formatting message.
 * It can be customizable in any way you like.
 */
$title = 'Nifty\'s Tours -- New request from ' . $request_name;

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
		. '<dd style="margin: 4px 4px 16px 4px;">' . $request_name . '</dd>'
		. '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Email</dt>'
		. '<dd style="margin: 4px 4px 16px 4px;">' . $request_email . '</dd>'
		. '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Phone</dt>'
		. '<dd style="margin: 4px 4px 16px 4px;">' . $request_tel . '</dd>'
		. '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Subject</dt>'
		. '<dd style="margin: 4px 4px 16px 4px;">More Information is Needed for my Trip</dd>'
		. '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Trip Name</dt>'
		. '<dd style="margin: 4px 4px 16px 4px;">' . $request_trip_name . '</dd>'
		. '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Translator Required</dt>'
		. '<dd style="margin: 4px 4px 16px 4px;">' . $request_translator . '</dd>';
	if($request_translator == 'Yes'){
			$message .= '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">For Language</dt>'
		. '<dd style="margin: 4px 4px 16px 4px;">' . $request_language . '</dd>';
	}
$message .= '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Trip Dates</dt>'
		. '<dd style="margin: 4px 4px 16px 4px;">from ' . $request_startdate . ' to ' . $request_enddate . '</dd>'
		. '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Number of people traveling</dt>'
		. '<dd style="margin: 4px 4px 16px 4px;">' . $request_number . '</dd>'
		. '<dt style="background-color: #eeeeee; padding: 4px; font-weight: bold;">Message</dt>'
		. '<dd style="margin: 4px 4px 16px 4px;">' . $request_message . '</dd>'
		. '</dl>'
		. '<div style="border-top: 1px solid #dddddd; margin-top: 32px; padding-top: 8px; font-size: 12px; font-style: italic; color: #707070;">&copy; Nifty\'s Tours tavel agency 2017</div>'
		. '</div>'
		. '</div>'
		. '</div>';

// Mail it!
$result = mail(TO_EMAIL, $title, $message, $headers);

include_once "connection.php";

// SQL STATEMENT

if ($request_translator == 'No'){
   $request_language = '';
}
$sql="INSERT INTO tbl_request(name, email, phone, tripName, translator, language, startdate, enddate, number, message)"
. " VALUES('$request_name', '$request_email', '$request_tel', '$request_trip_name', '$request_translator', '$request_language', STR_TO_DATE('$request_startdate', '%m/%d/%Y'), STR_TO_DATE('$request_enddate', '%m/%d/%Y'), $request_number, '$request_message');"; 

// Run a query
try {
    $result = $connection->query($sql);
} 
catch (PDOException $e) {
    die('Something went wrong DB');
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