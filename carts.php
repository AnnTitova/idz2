<?php
session_start();
include ("bd.php");// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
if (!empty($_SESSION['login']) and !empty($_SESSION['password']))
{
//если существет логин и пароль в сессиях, то проверяем их и извлекаем аватар
$login = $_SESSION['login'];
$password = $_SESSION['password'];

$result = mysql_query("SELECT * FROM users WHERE login='$login' AND password='$password'",$db); 
$myrow = mysql_fetch_array($result);
//извлекаем нужные данные о пользователе
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-envelope"></i> titova.anna3@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/ann.titova.9803"><i class="fa fa-facebook"></i> Ann Titova</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="magazin.php"><img src="images/home/logo1.png" alt="" style="width:110px"/></a>
						</div>
				
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">

								<li><a href="carts.php" class="active"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
								<li><a href="exit.php"><i class="fa fa-lock"></i> Выход</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		

	</header><!--/header-->

	<section id="cart_items" style="min-height:77vh;">
		<div class="container">
		
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Продукт</td>
							<td class="description"></td>
							<td class="price">Стоимость</td>
							<td class="description"></td><td class="description"></td>
							
							<td></td>
						</tr>
					</thead>
					<tbody>
															<?php
						include ("bd.php");

 

$res = mysql_query("SELECT * FROM products WHERE cart = '1' AND id_user = $_SESSION[id]	") or die(mysql_error());
while($total = mysql_fetch_array($res)){
echo '
<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/'. $total['image'] .'" style = "width: 110px; height: 110px;" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">'. $total['name'] .'</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>'. $total['price'] .'</p>
							</td>
<td></td><td></td>
							<form action = "cart_2.php?id='. $total['id'] .'" method="post"> 
							<td class="cart_delete">
								 <button type="submit" class = "submit"><a class="cart_quantity_delete"><i class="fa fa-times"></i></a></button>
							</td>
							</form>
						</tr>


';
}
						
						
						?>
						

					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->


	<footer id="footer"><!--Footer-->
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 Ann Titova.</p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>