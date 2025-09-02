<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "lyphardmelodie@gmail.com";
    $subject = "お問い合わせフォームからのメッセージ";
    $body = "お名前: $name\nメールアドレス: $email\nメッセージ:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>送信が完了しました。ありがとうございました。</p>";
    } else {
        echo "<p>送信に失敗しました。時間をおいて再度お試しください。</p>";
    }
} else {
    echo "<p>不正なアクセスです。</p>";
}
?>
