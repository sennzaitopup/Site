<?php

error_reporting(0);

include_once("../Config/Connection.php");

$hwid = $_GET['hwid'];

$result = odbc_exec($Connection, "SELECT * FROM LSForever_Development_Network WHERE hwid = '$hwid'");

while ($row = odbc_fetch_object($result))
{
	$status = $row->status;
}

echo $status;

?>