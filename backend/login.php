<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/SMTP.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';
require_once("../function/setAlert.php");


error_reporting(0);


require_once("../config/connect.php");


$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "" || $password == "") {
    setAlert("Invalid Data.", '1');
} else {
    if (!preg_match("/^[a-zA-Z0-9]+$/", $username || $password)) {
        setAlert("Symbol detected. Dont using symbol!", '1');
    } else {
        $query = odbc_exec($Connection, "SELECT * FROM userMemberDB WHERE userID = '$username' AND userPWD = '$password'");
        $getdata = odbc_num_rows($query);
        if ($getdata == 0) {
            setAlert("This account is not registered. Please try again.", '2');
        } else {
            setAlert("Login Successfully.", '0');
            session_start();

            $_SESSION['username'] = $username;

            echo "<script>window.location.href='./member_page.php';</script>";
        }
    }
}
