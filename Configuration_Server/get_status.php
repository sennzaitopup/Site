<?php

error_reporting(0);

include_once("../Config/Connection.php");

$query = odbc_exec($Connection, "SELECT * FROM LSForever_ServerIP WHERE id = '1'");
while ($rows = odbc_fetch_object($query)) {
    $getServerID = $rows->status;
	echo $getServerID;
}




?>