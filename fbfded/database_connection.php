<?php
$mysql_hostname = "internal-db.s129302.gridserver.com";
$mysql_user = "db129302_";
$mysql_password = "s9sSXb1I";
$mysql_database = "db129302_hyporeserve";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

?>