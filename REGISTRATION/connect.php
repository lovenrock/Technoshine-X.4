<?php
$mysql_host='localhost';
$mysql_user='technos_cad';
$mysql_pass='Centre4@ppdvlpmnt';

$mysql_db='technos_cad';

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass)||!mysql_select_db($mysql_db))
   die(mysql_error());

?>