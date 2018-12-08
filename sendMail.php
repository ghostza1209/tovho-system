<?php

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['aboutWebsite'])) {
    $aboutWebsite = $_POST['aboutWebsite'];
}

if (isset($_POST['aboutGraphics'])) {
    $aboutGraphics = $_POST['aboutGraphics'];
}
if (isset($_POST['description'])) {
    $description = $_POST['description'];
}

define("MAIL_TO", "info@tovho-system.com");
define("MAIL_FROM", "no-reply@tovho-system.com");
define("MAIL_TITLE", "Tovho-system");
define("MAIL_PROTOCAL", "SMTP");
define("MAIL_SMTP", "smtp.tovho-system.com");
define("MAIL_LANG", "Japanese");
define("MAIL_INTERNAL_ENCODE", "SJIS");


$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers = "From: " . constant('MAIL_FROM') . "\r\n";
$to = constant('MAIL_TO');
$title = 'Tovho Contact from' . $email . "\n";
$msg = "My name is : " . $name . "\n";
$msg .= "About Graphics : " . $aboutGraphics . "\n";
$msg .= "About Website : " . $aboutWebsite . "\n";
$msg .= "Description : " . $description . "\n";
$msg .= "E-mail : " . $email;
$titleEncode = mb_convert_encoding($title, constant('MAIL_INTERNAL_ENCODE'), "auto");
$msgEncode = mb_convert_encoding($msg, constant('MAIL_INTERNAL_ENCODE'), "auto");
ini_set(constant('MAIL_PROTOCAL'), constant('MAIL_SMTP'));
mb_language(constant('MAIL_LANG'));
mb_internal_encoding(constant('MAIL_INTERNAL_ENCODE'));
mb_send_mail($to, $titleEncode, $msgEncode, $headers);

//echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=./index.php?smst=1">';
echo '<META HTTP-EQUIV="Refresh" CONTENT="0;URL=./index.php">';
