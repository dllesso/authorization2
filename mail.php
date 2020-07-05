<meta http-equiv='refresh' content='3; url=index.php'>
<meta charset="UTF-8" />
<?php
$post=$_POST['banket1'];
if (isset($_POST['name'])) {$name = $_POST['name']; if ($name == '') {unset($name);}}
if (isset($_POST['phone'])) {$phone = $_POST['phone']; if ($phone == '') {unset($phone);}}
/*if (isset($_POST['people'])) {$people = $_POST['people']; if ($people == '') {unset($people);}}*/
if (isset($_POST['body'])) {$body = $_POST['body']; if ($body == '') {unset($body);}}

 
if (isset($name) && isset($phone)&& isset($body)){
 
$address = "dimfornys@rambler.ru";



$mes = "Имя: $name \Тел: $phone \nТекст: $body";
$send = mail ($address,$name,$mes);


if ($send == 'true')
{echo "The message is sent and in 3 seconds You will be directed to the main page";

 
 echo $post;
}
	
else {echo "Error! The message is not sent!";}
 
}
else
{
echo "You didn't fill in all the fields, go back and fill in the required fields!";
}
?>