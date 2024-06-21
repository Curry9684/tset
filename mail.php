<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "ben10960804@gmail.com";
    $subject = "聯絡表單提交來自: $name";
    $body = "姓名: $name\n電子郵件: $email\n\n留言:\n$message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "郵件發送成功!";
    } else {
        echo "郵件發送失敗.";
    }
} else {
    echo "非法訪問.";
}
?>
