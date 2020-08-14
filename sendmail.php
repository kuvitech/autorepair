
<?php
// Email Submit
// Note: filter_var() requires PHP >= 5.2.0
if ( isset($_POST['email']) && isset($_POST['name']) && isset($_POST['message']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
 
  // detect & prevent header injections
  $test = "/(content-type|bcc:|cc:|to:)/i";
  foreach ( $_POST as $key => $val ) {
    if ( preg_match( $test, $val ) ) {
      exit;
    }
  }

$headers = 'From: ' . $_POST["name"] . '<' . $_POST["email"] . '>' . "\r\n" .
    'Reply-To: ' . $_POST["email"] . "\r\n";
$message = 'Booking for ' . $_POST["services"] . "\r\n" . 'Name :' . $_POST["name"]
. "\r\n" . 'Vehicle Number :' . $_POST["vehiclenumber"]
. "\r\n" . 'Mobile Number :' . $_POST["contactno"]
. "\r\n" . 'Appointment Date :' . $_POST["appointmentDt"]
. "\r\n" . 'Appointment Time :' . $_POST["appointmentTime"]
. "\r\n" . 'Message :' . $_POST['message'];
  //
  mail( "kuvitech@gmail.com", $message, $headers );
 
  //      ^
  //  Replace with your email 
}
?>