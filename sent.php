<?php
    // print_r($_POST);
    $userName = htmlspecialchars($_POST['username']);
    echo $userName;
    $userTel = htmlspecialchars($_POST['usertel']);
    echo $userTel;
    $userText = htmlspecialchars($_POST['userText']);
    echo $userText;
    if (mail("faraonjake0@gmail.com", "Заказ с сайта", "ФИО:".$userName." Tel: ".$userTel."Вид услуг: ".$userText."\r\n"))
    {
    echo "<br>сообщение успешно отправлено";
    } else {
    echo "при отправке сообщения возникли ошибки";
    }
?>