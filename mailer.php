<?php
$name = $_POST["name"];
$to = "sanjeevsureshn@gmail.com";
$subject = "[MyWebsite]" . $_POST["subject"];
$txt = $_POST["body"];
$headers = "From: me@ddemented.github.io" . "\r\n";

mail($to,$subject,$txt,$headers);
?>
