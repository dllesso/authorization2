<?php
require "db.php";
?>

<!doctype html>
<html>
<head>
   <meta charset = "utf-8">
   <link rel="stylesheet" href="style.css"/>
   <title></title>
</head>

<body >
<div class="main">
<div class="main1">
<div class="main2"><div style="margin: 0 auto; width: 200px;"><a href="index.php"><img src="imgs/logo.jpg"></a></div><div class="side-title" style="margin-left: -10px;"></div></div>
<div class="main2" style="padding-top: 20px;">
<input type="checkbox" id="side-checkbox" />
<div class="side-panel">
    <label class="side-button-2" for="side-checkbox">+</label>    
    <div class="side-title"><div>
<svg class = "cvadrik" style="background"><cvadrik x1="220" y1="20" stroke="black" stroke-width="2"/><text  x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small"></text></svg>
<svg class = "cvadrik1"><cvadrik1 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small1"></text></svg>
<svg class = "cvadrik2"><cvadrik2 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small2"></text></svg>
<svg class = "cvadrik3"><cvadrik3 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small1"></text></svg>
</div></div>
    <?php if( isset($_SESSION['logged_user']) ): ?>
<p class ="smoll">Authorized</br>
Welcome <?php echo $_SESSION['logged_user']->login; ?></p>
<hr style="color:#BFE2FF;">
<a href="tab.php" style="text-decoration: none;"><p class="textik">List of our users</p></a>
<a href="photo.php" style="text-decoration: none;"><p class="textik">Photos of our usersp</p></a>
<a href="/logout.php" style="text-decoration: none;"><p class="textik">EXIT</p></a>
<?php else: ?>
You are not logged in
            <form action="signup.php" method="get" id="nameform">
            </form>
            <center><button type="submit" form="nameform" value="Submit"><strong>registration</strong></button>
            </br> 
			</br>
			<form action="login.php" method="get" id="nameform1">
            </form>
            <center><button type="submit" form="nameform1" value="Submit"><strong>entrance</strong></button>
			</center>
 

 
 <?php endif; ?>
 </br>
 
</div>
<div class="side-button-1-wr">
    <label class="side-button-1" for="side-checkbox">
        <div class="side-b side-open"><div style="float: left">
<svg class = "cvadrik" style="background"><cvadrik x1="220" y1="20" stroke="black" stroke-width="2"/><text  x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small"></text></svg>
<svg class = "cvadrik1"><cvadrik1 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small1"></text></svg>
<svg class = "cvadrik2"><cvadrik2 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small2"></text></svg>
<svg class = "cvadrik3"><cvadrik3 x1="220" y1="20" stroke="black" stroke-width="2"/><text x="50%" y="50%" alignment-baseline="middle" text-anchor="middle" class="small1"></text></svg>
</div></div>
        <!--<div class="side-b side-close">Закрыть</div>-->
    </label>
	<div style="float: right"><a href="form1.php"><img src="imgs/konv.jpg" style="height: 30px; padding-right: 10px;"></a></div>
</div>

</div>
<div class="main2">
<?php if( isset($_SESSION['logged_user']) ): ?>
 </br></br></br></br></br>
 <center><p class="textik">Welcome <?php echo $_SESSION['logged_user']->login; ?></p>
 <p class="textik">Now you can find sections of our site in the menu</p>
 <!--<p><a href="tab.php">Список наших пользователей</a></p>--></center>
 
 <div>
 <center>
 <!--<table border = "l"><p class ="smoll">
 <?php
 

$connection = mysqli_connect('127.0.0.1', 'root', '', 'zad5_db');    // переменная отв за соед с БД - присвоенно знач фции коннект - соединение
                                  // в скобках ('сервер','имя пользователя','пароль', 'назв БД');


$result = mysqli_query($connection, " SELECT * FROM`users`"); // переменная запроса статей таблицы articles



// втыкаем цикл с содержанием переменной stsic
$i=1;
while(($tcic=mysqli_fetch_assoc($result))) //$tcic переменная статьи

{
echo '<tr><td> ' . $i.'.)</td><td><em>id пользователя -</em> ' . $tcic['id'].'</td><td><em>login пользователя -</em>' . $tcic['login'].'</td><td><em>email пользователя -</em>'. $tcic['email'] .'</tr>' ; // вывод нужной части всей таблицы - заголовок статья
$i++;
} 

mysqli_close($connection);



?></p></td></table>-->
</center>
 
 
 
 </br>
 <?php endif; ?>
</div>
<div><center><p class="textik" style="font-size: 30px;">We are glad to see you on our website</p></center></div></div>

</div>
<div id="footer">
			<div  style="margin: 0 auto; max-width:1000px;  min-height: 80px;"><div class="side-title" style="margin-left: -10px;"><div><div style="float: right; padding-right: 30px;"><a href="form1.php" style="text-decoration: none;"><p class="textik">feedback</p></a></div>
			</div>
</div> </div>



 
    </body>
</html>