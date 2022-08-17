<?php

$to 		= 'youremail.com';
$headers	= 'FROM: "'.$email.'"';

//All form values
$name 		= $_POST['name'];
$subject 	= $_POST['subject'];
$phone 	= $_POST['phone'];
$email 		= $_POST['email'];
$msg 		= $_POST['msg'];
$output 	= 	"Name: ".$name."\nEmail: ".$email."\nPhone: ".$phone."\nSubject: ".$subject."\n\nMessage: ".$msg;

$send		= mail($to, $name, $output, $headers);