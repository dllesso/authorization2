<html>
<head>
   <meta charset = "utf-8">
   <link rel="stylesheet" href="style.css"/>
   <title></title>
</head>
<body>
<div><center><?php
require "db.php";

$data = $_POST;
if(isset($data['du_signup']))
{
	
	$errors = array(); 
	//проверка на незаполнение формы
	if(trim($data['login']) == '')
	{
		$errors[] = 'Login!';
	} 
	if(trim($data['email']) == '')
	{
		$errors[] = 'Введите email!';
	} 
	if($data['password'] == '')
	{
		$errors[] = 'Password!';
	} 
	if($data['password2'] != $data['password'])
	{
		$errors[] = 'entered incorrectly';
	} 
    
	if(R::count('users', "login = ?" , array($data['login']))>0)
	{
		$errors[] = 'login busy';
	} 
	if(R::count('users', "email = ?" , array($data['email']))>0)
	{
		$errors[] = 'email busy';
	} 
	
    if(empty($errors))
	{
	// все хорошо регистрируем	
	//команды смотрим на сайте БД readben.php после введения "шорткодов" таблица в БД создается автоматически 
	$user = R::dispense('users');
	$user->login = $data['login'];
	$user->email = $data['email'];
	$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
	R::store($user);
	echo'<div style = "color: green;">Successful registration click the authorization link</div> 
	</div></hr>';
	}else
	{//выводим первый элемент массива ошибок
		echo'<div style = "color: red;">'.array_shift($errors).'</div> 
	</div></hr>';
	}
}


?></center></div>
<div class="main">
<div class="main1">
<div class="main2"><div style="margin: 20 auto; width: 200px;"><a href="index.php"><img src="imgs/logo.jpg"></a></div></div>
<div class="main2">
<center><a href="login.php" style="text-decoration: none; font-size: 30px;">Authorization</a></center>

<center>
<form action="/signup.php" method = "POST">
<p>
<p><strong>Your login</strong>:</p>
<input type = "text" name = "login" value ="<?php echo @$data['login']; ?>">
</p>
<p>
<p><strong>Your email address</strong>:</p>
<input type = "email" name = "email" value ="<?php echo @$data['email']; ?>" >
</p>
<p>
<p><strong>Your password</strong>:</p>
<input type = "password" name = "password" value ="<?php echo @$data['password']; ?>">
</p>
<p>
<p><strong>confirm your password</strong>:</p>
<input type = "password" name = "password2" value ="<?php echo @$data['password']; ?>">
</p>
<p>
<button type="submit" name = "du_signup">Registration</button>
</p>
</form>
<center/>
</div></div>
<body/>
<html/>