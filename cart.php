<?php
include ("header.php");	
$a = $_GET[id];
$b = $_POST['sessia'];
include ("bd.php");
mysql_query("UPDATE products SET cart=1,id_user = $_SESSION[id] WHERE id='$a'");

exit("<html><head><meta http-equiv='Refresh' content='0; URL=magazin.php'></head></html>");

?>