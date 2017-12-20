
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Войдите в свой аккаунт</h2>
						
				
<?php

if (!isset($myrow['avatar']) or $myrow['avatar']=='') {
//проверяем, не извлечены ли данные пользователя из базы. Если нет, то он не вошел, либо пароль в сессии неверный. Выводим окно для входа. Но мы не будем его выводить для вошедших, им оно уже не нужно.
print <<<HERE


<form action="testreg.php" method="post" class = "form_avtor">
 <p>
    
    <input name="login" type="text" size="15" maxlength="15" class = "login" placeholder = "Логин">
HERE;

	
if (isset($_COOKIE['login'])) //есть ли переменная с логином в COOKIE. Должна быть, если пользователь при предыдущем входе нажал на чекбокс "Запомнить меня"
{
//если да, то вставляем в форму ее значение. При этом пользователю отображается, что его логин уже вписан в нужную графу

}


print <<<HERE
  </p>
<!-- В текстовое поле (name="login" type="text") пользователь вводит свой логин -->  
  <p>
 
    <input name="password" type="password" size="15" maxlength="15" class = "login" placeholder = "Пароль">
HERE;

	
if (isset($_COOKIE['password']))//есть ли переменная с паролем в в COOKIE. Должна быть, если пользователь при предыдущем входе нажал на чекбокс "Запомнить меня"
{
//если да, то вставляем в форму ее значение. При этом пользователю отображается, что его пароль уже вписан в нужную графу

}
	
print <<<HERE
  </p>

   <span>
								<input type="checkbox" class="checkbox"> 
								Запомнить меня
							</span>

<p>
<button submit name="submit" value="Войти" class = "submit">Войти</button>

</p></form>

HERE;
}




else
{
//при удачном входе пользователю выдается все, что расположено ниже между звездочками.
//************************************************************************************


//************************************************************************************
//при удачном входе пользователю выдается все, что расположено ВЫШЕ между звездочками.
}

?>
	</div><!--/login form-->
				</div>
				
			</div>
		</div>
	</section><!--/form-->
	

		


  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
