<?php

error_reporting(0);

include_once("../Config/Connection.php");

$result = odbc_exec($Connection, "UPDATE LSForever_Restart_Server SET status = 'Restart' WHERE id = '1'");

if($result)
{
    echo "True";
}

?>