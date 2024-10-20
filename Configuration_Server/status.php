<?php

error_reporting(0);

include_once("../Config/Connection.php");

$query = odbc_exec($Connection, "SELECT * FROM LSForever_Restart_Server WHERE id = '1'");
while ($rows = odbc_fetch_object($query))
{
	$status = $rows->status;
}

echo $status;

?>