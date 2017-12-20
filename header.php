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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
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
<body style = "margin: 0; padding: 0;top: 0;">
	<header id="header" style = "margin: 0; padding: 0;margin-top: -1.5%;"><!--header-->
		<div class="header_top" style = "top: 0;"><!--header_top-->
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
						<div class="btn-group pull-right">
							
							
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								
								<li><a href="carts.php"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
								<li><a href="exit.php"><i class="fa fa-lock"></i> Выход</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		
	</header><!--/header-->


	
	
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>КАТЕГОРИИ</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#sportswear">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											ЖЕНСКАЯ ОДЕЖДА
										</a>
									</h4>
								</div>
								<div id="sportswear" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="magazin_women_t-shirt.php">ФУТБОЛКИ </a></li>
											
											<li><a href="magazin_women_dress.php">ПЛАТЬЯ </a></li>
											<li><a href="magazin_women_jacket.php">ПИДЖАК </a></li>
											
											<li><a href="magazin_women_trousers.php">БРЮКИ </a></li>
											<li><a href="magazin_women_jeans.php">ДЖИНСЫ </a></li>
											<li><a href="magazin_women_outerwear.php">ВЕРХНЯЯ ОДЕЖДА </a></li>
											<li><a href="magazin_women_skirt.php">ЮБКИ </a></li>
											<li><a href="magazin_women_blouse.php">БЛУЗЫ </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#mens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											МУЖСКАЯ ОДЕЖДА
										</a>
									</h4>
								</div>
								<div id="mens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="magazin_man_t-shirt.php">ФУТБОЛКИ</a></li>
											
											
											<li><a href="magazin_man_trousers.php">БРЮКИ</a></li>
											<li><a href="magazin_man_jumper.php">ДЖЕМПЕРЫ</a></li>
											
											<li><a href="magazin_man_jeans.php">ДЖИНСЫ</a></li>
											
											<li><a href="magazin_man_outerwear.php">ВЕРХНЯЯ ОДЕЖДА</a></li>
											
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											ДЕТЯМ
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="magazin_child_t-shirt.php">РУБАШКИ</a></li>
											
											<li><a href="magazin_child_dress.php">ПЛАТЬЯ</a></li>
											
											<li><a href="magazin_child_outerwear.php">ВЕРХНЯЯ ОДЕЖДА</a></li>
											<li><a href="magazin_child_trousers.php">БРЮКИ</a></li>
											
											
											<li><a href="magazin_child_jeans.php">ДЖИНСЫ</a></li>
										</ul>
									</div>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="magazin_shoes.php">ОБУВЬ</a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="magazin_accessories.php">АКСЕССУАРЫ</a></h4>
								</div>
							</div>
							
						</div><!--/category-products-->
					
						
						
						
					
					</div>
				</div>