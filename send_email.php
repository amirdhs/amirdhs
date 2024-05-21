<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // دریافت داده‌های فرم
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // آدرس ایمیل گیرنده
    $to = "amirmo800@gmail.com";
    // عنوان ایمیل
    $email_subject = "New Contact Form Submission: $subject";
    // محتوای ایمیل
    $email_body = "You have received a new message from the contact form on your website.\n\n".
                  "Here are the details:\n".
                  "Name: $name\n".
                  "Email: $email\n".
                  "Message:\n$message";

    // هدرهای ایمیل
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // ارسال ایمیل
    mail($to, $email_subject, $email_body, $headers);

    // بازگرداندن کاربر به صفحه تشکر
    header('Location: ');
    exit;
}
?>
