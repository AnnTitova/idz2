<?php
include ("header.php");	
$a = $_GET[id];

include ("bd.php");
mysql_query("UPDATE products SET cart=0 WHERE id='$a' AND id_user = $_SESSION[id]");
exit("<html><head><meta http-equiv='Refresh' content='0; URL=carts.php'></head></html>");

?>