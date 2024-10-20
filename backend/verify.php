<?php

error_reporting(0);

$verification_code = $_GET['verification_code'];

require_once("../config/connect.php");

if (!preg_match("/^[a-zA-Z0-9]+$/", $verification_code)) {
    header('location: ../verify_inject.php');
} else {
    $query = odbc_exec($Connection, "SELECT * FROM userMemberDB WHERE verification_code = '$verification_code'");
    $getUser = odbc_fetch_object($query);
    $verify = $getUser->verify;
    $code = $getUser->verification_code;
    $userID = $getUser->userID;

    if ($userID == "") {
        header('location: ../verify_notfound.php');
    } else {
        if ($verify == "t") {
            header('location: ../verify_already.php');
        } else {
            $submit = odbc_exec($Connection, "UPDATE userMemberDB set verify = 't' WHERE verification_code = '$verification_code'");
            if ($submit) {
                header('location: ../verify_success.php');
            } else {
                header('location: ../verify_error.php');
            }
        }
    }
}
