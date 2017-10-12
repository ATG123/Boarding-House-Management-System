<?php
$connection=mysql_connect(DB_HOST,DB_USER,DB_PASS)  or die("Couldn't Connect To Server");

$db=mysql_select_db(DB_NAME,$connection)
or
die("Couldn't Select Database");
?>