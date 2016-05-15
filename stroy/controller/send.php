<?php
if(
    (isset($_POST['name']) && $_POST['name']!="")
    && (isset($_POST['tel']) && $_POST['tel']!="")
    && (isset($_POST['message']) && $_POST['message']!="")
){
 
    $name = trim(htmlspecialchars(stripslashes(strip_tags($_POST['name']))));
    $tel =  trim(htmlspecialchars(stripslashes(strip_tags($_POST['tel']))));
    $msg =  trim(htmlspecialchars(stripslashes(strip_tags($_POST['message']))));

    $to = "sb-br@yandex.ru";
    $subject = "От поситителя сайта";
    $text =  "Написал(а): $name\n Контактный телефон - $tel\n Текст письма: $message\n\n";

    $header = "Content-type: text/html; charset=utf-8\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    
    $sending = mail($to, $subject, $text, $header);

    if($sending) echo "Письмо отправлено. Ждите ответа";
}
?>