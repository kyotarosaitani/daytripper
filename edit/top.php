<?php
require_once('library.php');
session();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>編集管理トップ</title>
</head>
<body>
    編集管理トップメニュー<br />
    <br />
    <a href="castles/castles_list.php">城管理</a><br />
    <br />
    <a href="culturalproperty/culturals_list.php">その他文化財</a><br />
    <br />
    <a href="update/update_list.php">更新情報</a><br />
    <br />
    <a href="logout.php">ログアウト</a><br />
</body>
</html>