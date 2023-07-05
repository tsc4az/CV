<?php

$name =  $_POST['name']
$email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST ['message']


$headers = "From:" .$name."<" .$email. ">\r\n;";

$to = "timcatellier1@gmail.com";

mail($to,$subject,$message,$headers)
or die("Error!");



?>