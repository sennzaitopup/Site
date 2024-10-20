<?php

error_reporting(0);

include_once("../Config/Connection.php");

$result = odbc_exec($Connection, "UPDATE LSForever_Restart_server SET status = 'Active' WHERE id = '1'");

if($result)
{
    echo "True";
}

?>