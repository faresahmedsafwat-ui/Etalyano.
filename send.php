<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $phone   = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to      = "faresahmedsafwat@gmail.com"; // ← حط إيميلك هنا
    $subject = "رسالة جديدة من الموقع";
    $body    = "الاسم: $name\nرقم الهاتف: $phone\n\nالرسالة:\n$message";

    $headers = "From: contact@yourdomain.com\r\n"; // ← يُفضل يكون دومينك الفعلي
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "تم إرسال الرسالة بنجاح.";
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة.";
    }
} else {
    echo "طريقة الإرسال غير صحيحة.";
}
?>
