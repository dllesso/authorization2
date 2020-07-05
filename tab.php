<!doctype html>
<html>
<head>
   <meta charset = "utf-8">
   <link rel="stylesheet" href="style.css"/>
   <title>таблица пользователей</title>
</head>

<body >
<div class="main">
<div class="main1">
<div class="main2"><div style="margin: 20 auto; width: 200px;"><a href="index.php"><img src="imgs/logo.jpg"></a></div></div>
<div style="min-height: 600px;"><center><p>User table</p></center>

<center>
 <table border = "l" style="hight:100%"><p class ="smoll">
 <?php
 

$connection = mysqli_connect('127.0.0.1', 'root', '', 'zad5_db');    // переменная отв за соед с БД - присвоенно знач фции коннект - соединение
                                  // в скобках ('сервер','имя пользователя','пароль', 'назв БД');


$result = mysqli_query($connection, " SELECT * FROM`users`"); // переменная запроса статей таблицы articles



// втыкаем цикл с содержанием переменной stsic
$i=1;
while(($tcic=mysqli_fetch_assoc($result))) //$tcic переменная статьи

{

echo '<tr><td> ' . $i.'.)</td><td><em>id  -</em> ' . $tcic['id'].'</td><td><em>login  -</em>' . $tcic['login'].'</td><td><em>email  -</em>'. $tcic['email'] .'</tr>' ; // вывод нужной части всей таблицы - заголовок статья
$i++;
} 

mysqli_close($connection);



?></p></td></table>
</center>

</div>
</div></div>

</body>
</html>