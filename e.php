<?php
$to = "fridaycmg@gmail.com";
$subject = "HTML email";

$message = "Hej";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <friday@gmail.com>' . "\r\n";
mail($to,$subject,$message,$headers);
?>
