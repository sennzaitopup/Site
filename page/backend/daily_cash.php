<?php

include_once("../../config/connect.php");
include_once("../../function/setAlert.php");

error_reporting(0);

session_start();

$Data = $_SESSION['username'];

$query = odbc_exec($Connection, "SELECT * FROM userMemberDB WHERE userID = '$Data'");
while ($rows = odbc_fetch_object($query)) {
    $accountIDX = $rows->accountIDX;
}

$randomCash = rand(50, 400);

$Date = date('Y-m-d');

$query1 = odbc_exec($Connection, "SELECT * FROM LSForever_Cash_History WHERE accountIDX = '$accountIDX' AND date = '$Date'");
$check_user1 = odbc_fetch_object($query1);

$cash2 = $check_user1->cash;
$date = $check_user1->date;

if ($cash2 != "") {
    setAlert("You already claim the daily cash today. Please comeback tomorrow!", '2');
} else {
    $submit = odbc_exec($Connection, "UPDATE userMoneyDB SET bonusCash = bonusCash + '$randomCash' WHERE accountIDX = '$accountIDX'");
    if ($submit) {
        odbc_exec($Connection, "INSERT INTO LSForever_Cash_History VALUES ('$accountIDX', '$randomCash', '$Date')");
        setAlert("Congratulations! You got " . $randomCash . " Cash.", '0');
    } else {
        setAlert("Server Error.", '1');
    }
}
