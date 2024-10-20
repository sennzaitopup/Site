<?php

$userid = $_GET['userid'];

//error_reporting(0);

include_once("../Config/Connection.php");

$result = odbc_exec($Connection, "UPDATE userMemberDB SET online = 'f' WHERE userID = '$userid'");

odbc_exec($Connection, "UPDATE userMemberDB SET online = 'f' WHERE userID = '$userid'");

echo $userid;

if($result)
{
    echo "True";
}
else
{
	echo "False";
}

?>