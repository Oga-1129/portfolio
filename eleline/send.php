<?php

$title = $_POST['title'];
$mail = $_POST['mail'];
$contents = $_POST['contents'];
$header = 'From: eleline.me' . "\r\n";

$contents = "ポートフォリオサイトからのコンタクト\n\n- 送り主メールアドレス -\n" . $mail . "\n\n- 本文 -\n" . $contents; 

$to = "ggggepicstar@gmail.com";

header('Content-Type: application/json; charset=utf-8');

// 日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

// メール送信
if(mb_send_mail($to, $title, $contents, $header)){
  echo json_encode("true");
} else {
  echo json_encode("false");
};

exit;