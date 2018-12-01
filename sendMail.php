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
$title = $detailX['shopName'] . "【ワンデイスタイル】" . $mymemberName . "ダイレクトメッセージが届きました";
$msg = $detailX['shopName'] . " 様 \n";
$msg .= "いつもワンデイスタイルをご利用いただきありがとうございます。 \n \n";
//        $msg .= "$workday に就労予定の \n";
$msg .= "$mymemberName 様より、ダイレクトメッセージが届いています。 \n";
$msg .= "今すぐマイページで確認してみましょう。 \n \n \n \n";
$msg .= "▼ワンデイスタイルマイページへログイン \n";
$msg .= "https://oneday-style.com/controlPanel// \n\n\n\n";
$msg .= "今後ともワンデイスタイルをよろしくお願い申し上げます。 \n";
$msg .= "******************************************************* \n";
$msg .= "このメールは送信専用です。 \n";
$msg .= "ご不明点等は、ワンデイスタイルWebサイトよりお問い合わせください。 \n \n";
$msg .= "▼ワンデイスタイルお問い合わせフォーム \n";
$msg .= "⇒ http://www.oneday-style.com//pageContactus/ \n\n";
$msg .= "******************************************************* \n \n \n";
$msg .= "女の子を厳選して希望のキャスティング！ \n";
$msg .= "もっと簡単にキャスト確保ができるワンデイスタイル！ \n \n";
$msg .= "http://www.oneday-style.com/  \n \n";
$msg .= "TEL : 0120-5115-39 \n";
$msg .= "E-mail：noreply@oneday-style.com";
$titleEncode = mb_convert_encoding($title, constant('MAIL_INTERNAL_ENCODE'), "auto");
$msgEncode = mb_convert_encoding($msg, constant('MAIL_INTERNAL_ENCODE'), "auto");
ini_set(constant('MAIL_PROTOCAL'), constant('MAIL_SMTP'));
mb_language(constant('MAIL_LANG'));
mb_internal_encoding(constant('MAIL_INTERNAL_ENCODE'));
mb_send_mail($to, $titleEncode, $msgEncode, $headers);
