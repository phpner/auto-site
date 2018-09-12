<?php

$time = date("F j, Y, g:i a");

    $name = htmlspecialchars($_POST['name']);
    $mainProduct = htmlspecialchars($_POST['mainProduct']);
    $phone = htmlspecialchars($_POST['phone']);
    $comment = htmlspecialchars($_POST['comment']);

    $message = " <p><h3>Форма заказа :' </h3></p> </br><p><b>Имя покупателя </b> $name </p> </br><p><b>Телефон</b>: $phone</p><br><p><b>Продукт</b>: $mainProduct</p><br> <p><b> Время заказа</b> : $time </p>";

    emailTo($message,"Форма заказа");


function emailTo($message, $subject){
    $to  = "ard@gmail.com";

    $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
    $headers .= "From: Отправитель from@example.com\r\n"; //Наименование и почта
    $headers .= "Reply-To: reply-to: form@example.com\r\n";

    mail($to, $subject, $message, $headers);
    header('Location: /#thanks');
    exit;
}
