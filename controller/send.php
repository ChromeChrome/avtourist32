 ​<?php
 
	$name = $_POST['name'];
    $tel = $_POST['tel'];
    $message = strip_tags($_POST['message']);

    $to = "avtojurist32@gmail.com";
    $subject = "От поситителя сайта";
    $text =  "Написал(а): $name\n Контактный телефон - $tel\n\n Текст письма: $message\n";

    $header = "Content-type: text/html; charset=utf-8\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    
    $sending = mail($to, $subject, $text, $header);

    if($sending) echo "Письмо отправлено. Ждите ответа";

    ?>