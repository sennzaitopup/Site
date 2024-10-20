<?php

error_reporting(0);

include_once("../../config/connect.php");
include_once("../../function/setAlert.php");

session_start();

$Data = $_SESSION['username'];

$current_password = $_POST['current_password'];
$new_password = $_POST['new_password'];
$confirmation_password = $_POST['confirmation_password'];

$query = odbc_exec($Connection, "SELECT * FROM userMemberDB WHERE userID = '$Data'");
while ($rows = odbc_fetch_object($query)) {
    $password = $rows->userPWD;
}

if ($current_password == "" || $new_password == "" || $confirmation_password == "") {
    setAlert("Invalid Data.", '1');
} else {
    if ($new_password != $confirmation_password) {
        setAlert("The password you entered is doesnt match.", '2');
    } else {
        if ($current_password != $password) {
            setAlert("The password you entered is wrong.", '2');
        } else {
            $submit = odbc_exec($Connection, "UPDATE userMemberDB set userPWD = '$new_password' WHERE userID = '$Data'");
            if ($submit) {
                setAlert("Change Password successfully.", '0');
            } else {
                setAlert("Server Error.", '2');
            }
        }
    }
}
