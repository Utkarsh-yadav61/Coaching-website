<?php
$name = $_POST['Name'];
$visitor_email = $_POST['Email'];
$subject = $_POST['Subject'];
$massege = $_POST['Massage'];

$email_from = 'yadavsandeep.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
               "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Massege: $massage .\n";

$to = 'climaxacademyjakhanian@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email\r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>