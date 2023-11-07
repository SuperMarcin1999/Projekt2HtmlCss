<?php
echo "Email sent!";
if(isset($_POST['name']))
$name = $_POST['name'];
if(isset($_POST['email']))
$email = $_POST['email'];

$content = "From: $name";
$mailheader = "From: $email \r\n";
mail($email, "sialala", $content, $mailheader) or die("Error!");
echo "Email sent!";
?>