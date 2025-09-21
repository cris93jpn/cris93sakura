<?php

// 送信先のメールアドレス
$to = "cris.93.jpn@gmail.com";  

// フォームからのデータを取得
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// メールの内容を設定
$subject = "Nuevo mensaje desde tu portafolio";
$body = "名前: $name\nメール: $email\n内容:\n$message";
$headers = "From: $email";

// メールを送信
if (mail($to, $subject, $body, $headers)) {
    echo "<p>メッセージが送信されました！ありがとうございます。</p>";
} else {
    echo "<p>エラーが発生しました。もう一度お試しください。</p>";
}
?>
