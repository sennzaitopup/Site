<?php

//error_reporting(0);

require_once("../config/connect.php");

if (isset($_GET))
    if (isset($_GET['token'])) {

        $token = $_GET['token'];

        if (!preg_match("/^[a-zA-Z0-9]+$/", $_GET['token'])) {
            header('location: ../reset_inject.php');
        } else {
            $query = odbc_exec($Connection, "SELECT * FROM LSForever_Reset_Password WHERE token = '$token'");
            $getdata = odbc_fetch_object($query);

            $userid = $getdata->userid;
            $newpass = $getdata->password;
            if ($userid == "") {
                header('location: ../reset_notfound.php');
            } else {
                $submit = odbc_exec($Connection, "UPDATE userMemberDB set userPWD = '$newpass' WHERE userID = '$userid'");
                if ($submit) {
                    odbc_exec($Connection, "DELETE FROM LSForever_Reset_Password WHERE token = '$token'");
                    header('location: ../reset_success.php');
                    //echo $token;
                    //echo $newpass;
                    //echo $userid;
                } else {
                    header('location: ../reset_error.php');
                }
            }
        }
    }
