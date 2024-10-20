<?php

error_reporting(0);

include_once("../Config/Connection.php");

$username = $_GET['username'];
$password = $_GET['password'];
$hwid = $_GET['hwid'];

$query = odbc_exec($Connection, "SELECT * FROM userMemberDB WHERE userID = '$username' AND userPWD = '$password'");
while ($rows = odbc_fetch_object($query)) {
    $getAccountIDX = $rows->accountIDX;
}

$result = odbc_exec($Connection, "SELECT * FROM LSForever_Development_Network WHERE hwid = '$hwid'");
$cek_result = odbc_num_rows($result);

if($getAccountIDX == "")
{
	echo "Invalid";
}
else
{
	odbc_exec($Connection, "UPDATE userGameDB SET userState = '-1' WHERE accountIDX = '$getAccountIDX'");
	odbc_exec($Connection, "exec FIX_EXPIRED_KEY @userNum = '$getAccountIDX'");
	odbc_exec($Connection, "UPDATE userMemberDB SET hwid = '$hwid' WHERE userID = '$username'");
	odbc_exec($Connection, "UPDATE userMemberDB SET online = 't' WHERE userID = '$username'");
	odbc_exec($Connection, "UPDATE userMemberDB SET verify = 't' WHERE userID = '$username'");
	echo "Registered";
	if($cek_result == 0)
	{
		odbc_exec($Connection, "INSERT INTO LSForever_Development_Network VALUES ('0', 'Secure')");
	}
}
?>