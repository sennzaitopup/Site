<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-color: black;
}
</style>
</head>
<body>

<?php
require_once("../config/connect_log.php");

$query = odbc_exec($Connection, "select top 1 * from log_game_concurrent where not concurrent = 0 order by regdate desc");
$getdata = odbc_fetch_object($query);

$total_online = $getdata->concurrent;
$user_online = number_format($total_online, 0, '.', '');

echo "<font color='white'>".$user_online." Online</font>";
//echo $user_online . ' Online';
