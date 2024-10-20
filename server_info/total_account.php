<?php
require_once("../config/connect.php");

$query = odbc_exec($Connection, "SELECT * FROM userMemberDB");
$getdata = odbc_num_rows($query);

$total_account = number_format($getdata, 0, '.', '');

echo $total_account . ' User';
