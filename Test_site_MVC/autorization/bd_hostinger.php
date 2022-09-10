<?php
$db = mysql_connect ("mysql.hostinger.ru","u590001771_shop","shopshop");
mysql_select_db ("u590001771_shop",$db);


mysql_select_db("mysql.hostinger.ru",$db);
mysql_query ("set character_set_client='cp1251'", $db);
mysql_query ("set character_set_results='cp1251'", $db);
mysql_query ("set collation_connection='cp1251_general_ci'", $db);
?>