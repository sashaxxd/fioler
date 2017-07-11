<?php
session_start(); 
//luxurytopwatch.line@yandex.ru
 /* Здесь проверяется существование переменных */
 if (empty($_POST['name']) or empty($_POST['phone'])) {
 $_SESSION["error"] = "Заполните все данные формы!";
header('Location: http://reg-rad-det.novoavto7.ru/');
 exit;}
  if (isset($_POST['phone'])) {$phone = $_POST['phone'];}
 if (isset($_POST['name'])) {$name = $_POST['name'];}
  

/* Сюда впишите свою эл. почту * luxurytopwatch.line@yandex.ru webdizain@bk.ru*/
 $emails = "luxurytopwatch.line@yandex.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "Тема: Радар-Детекторы с http://reg-rad-det.novoavto7.ru/!\nТелефон: $phone\nИмя: $name";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Радар-Детекторы '; //сабж
$email='Радар-Детекторы  <http://reg-rad-det.novoavto7.ru/>'; // от кого
 $send = mail ($emails,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');
header('Refresh: 3; URL=http://reg-rad-det.novoavto7.ru/');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="refresh" content="3; url=http://reg-rad-det.novoavto7.ru/">
<title>С вами свяжутся</title>
<meta name="generator">
<style type="text/css">
body
{
   
   background: #ffffff url(images/zakaz.jpg) top -20% center no-repeat;
   
}

<script type="text/javascript">
setTimeout('location.replace("http://reg-rad-det.novoavto7.ru/")', 3000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
</body>
</html>