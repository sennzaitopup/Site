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
$repassword = $_POST['repassword'];

if ($username == "" || $password == "" || $repassword == "") {
    setAlert("Invalid Data.", '1');
} else {
    if (!preg_match("/^[a-zA-Z0-9]+$/", $username || $password || $repassword)) {
        setAlert("Symbol detected. Dont using symbol!", '1');
    } else {
        if ($password != $repassword) {
            setAlert("The password you entered is doesnt match. Please try again.", '1');
        } else {
            $query = odbc_exec($Connection, "SELECT * FROM userMemberDB WHERE userID = '$username'");
            $getdata = odbc_num_rows($query);
            $fetchdata = odbc_fetch_object($query);

            $email = $fetchdata->email;

            $query2 = odbc_exec($Connection, "SELECT * FROM LSForever_Reset_Password WHERE userid = '$username'");
            $getdata2 = odbc_num_rows($query2);
            if ($getdata == 0) {
                setAlert("This account is not registered.", '2');
            } else {
                if ($getdata2 != 0) {
                    setAlert("You already requesting about Recovery Account. Please check your email.", '2');
                } else {
                    $token = md5(rand() . $username . $password);
                    $submit = odbc_exec($Connection, "INSERT INTO LSForever_Reset_Password VALUES ('$username', '$password', '$token')");
                    if ($submit) {
                        $mail = new PHPMailer(true);
                        $mail->Host = 'smtp.gmail.com';
                        $mail->IsSMTP();
                        $mail->Port = 587;
                        $mail->SMTPAuth = true;
                        $mail->SMTPSecure = 'tls';
                        $mail->Username = ''; // Email
                        $mail->Password = ''; // Password
                        $mail->setFrom('', 'Forever Lost');
                        $mail->addAddress($email);
                        $mail->addReplyTo(''); // Email
                        $mail->Subject = 'Resetting account password ' . $username . '';
                        $mail->Body = 'Hi ' . $username . ',

This is your verification link of resetting password. Please do not give this link to anyone.

https://reborn.forever-ls.co/Web/backend/reset.php?token=' . $token . '

- Forever Lost';
                        $mail->send();
                        setAlert("The verification link has been sending to your email " . $email . ".", '0');
                    } else {
                        setAlert("Server Error.", '2');
                    }
                }
            }
        }
    }
}
