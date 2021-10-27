<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
?>
<?php
	$email_from = 'michaela.ellis@raywhite.com';

	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:
?>
<?php

  $to = "michaela.ellis@yourwebsite.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>
