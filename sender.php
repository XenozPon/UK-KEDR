<?php
    $name = $_POST['name'];
    $surname = $_POST['surname'];
	$phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];

	$to = "companydomok@gmail.com";
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Тема обращения: $name
    ФИО заявителя: $surname
    Почта заявителя: $email
    Телефон: $phone
    Содержание: $text";
	mail($to, $subject, $msg, "From: $from ");

?>

<h1>форма отправлена</h1>
<br>
<a href="index.html">Вернуть форму</a>
