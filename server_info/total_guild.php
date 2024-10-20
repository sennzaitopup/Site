<?php
require_once("../config/connect.php");

$query = odbc_exec($Connection, "SELECT * FROM userGuildDB");
$getdata = odbc_num_rows($query);

$total_guild = number_format($getdata, 0, '.', '');

echo $total_guild . ' Guild';
