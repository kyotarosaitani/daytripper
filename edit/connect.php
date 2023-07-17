<?php

$dsn = 'mysql:dbname=LAA1541095-daytripper;host=mysql215.phy.lolipop.lan;charset=utf8';
$user = 'LAA1541095';
$password = 'qwer';
$dbh = new PDO($dsn, $user, $password);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>