<html>
<head>
   <meta charset = "utf-8">
   <link rel="stylesheet" href="style.css"/>
   <title></title>
</head>
<body>


<div class="main">
<div class="main1">
<div class="main2"><div style="margin: 10 auto; width: 200px;"><a href="index.php"><img src="imgs/logo.jpg"></a></div></div>
<div class="main2">
<div style="max-width: 1000px; margin: -10 auto;"><center><?php
require "db.php";

$data = $_POST;
if( isset($data['do_login']) )
{
	$errors = array(); 
	$user = R::findOne('users', 'login = ?', array( $data['login'] ));
	if( $user )
	{
		//логин существует
		if( password_verify($data['password'], $user->password) )
		{
			$_SESSION['logged_user']=$user;
			echo'<div style = "color: #c6adcc; font-size: 30px;">You are logged in You can go to the main page</div></hr>';
		}else
		{
			$errors[] = 'The password is incorrect';
		}
	}else
	{
		$errors[] = 'The user with this username was not found';
	}
	if( ! empty($errors))
	{
	
	echo'<div style = "color: red;">'.array_shift($errors).'</div> 
	</hr>';
	}
}
?></center></div>
<center>
<form action="login.php" method = 'POST'>
<p>
<p><strong>Login</strong>:</p>
<input type = 'text' name = "login" value ="<?php echo @$data['login']; ?>">
</p>
<p><strong>Your password</strong>:</p>
<input type = 'password' name = "password" value ="<?php echo @$data['password']; ?>">
</p>
<p>
<button type="submit" name = "do_login">Enter</button>
</p>
</form>
<center/>
</div></div>
<body/>
<html/>