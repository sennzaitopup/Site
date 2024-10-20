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
$email = $_POST['email'];
$nickname = $_POST['nickname'];

if ($username == "" || $password == "" || $repassword == "" || $email == "" || $nickname == "") {
    setAlert("Invalid Data.", '1');
} else {
    if (!preg_match("/^[a-zA-Z0-9]+$/", $username || $password || $repassword || $email || $nickname)) {
        setAlert("Symbol detected. Dont using symbol!", '1');
    } else {
        $get_code = md5(rand() . $username);


        $words = array('Developer', 'developer', '[GM]', 'GM', '!@#$%^&*(){}:"|<>?~`_+-=¾', '`', '!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_', '+', '-', '=', '`', '[', ']', '{', '}', '"', ':', ';', '|', '<', '>', '/', '?', '¾');
        $stringfilter = str_replace($words, "HackedByBalzpro", $nickname);

        $query = odbc_exec($Connection, "SELECT * FROM userMemberDB WHERE userID = '$username'");
        $check_user = odbc_fetch_object($query);
        $getUsername = $check_user->userID;
        $query1 = odbc_exec($Connection, "SELECT * FROM userMemberDB WHERE email = '$email'");
        $check_user1 = odbc_fetch_object($query1);
        $getEmail = $check_user1->email;
        $query2 = odbc_exec($Connection, "SELECT * FROM userMemberDB WHERE nickName = '$nickName'");
        $check_user2 = odbc_fetch_object($query2);
        $getNickname = $check_user2->nickName;
        if ($getUsername != "") {
            setAlert("UserID already taken. Use another UserID.", '2');
        } else {
            if ($getEmail != "") {
                setAlert("Email already taken. Use another Email.", '2');
            } else {
                if ($getNickname != "") {
                    setAlert("Nickname already taken. Use another Nickname.", '2');
                } else {
                    $nickname2 = str_replace($words, "", $nickname);
                    $insert_data = odbc_exec($Connection, "exec USP_Web_Member_Add @sUserId = '$username', @sPASSWORD = '$password', @sActiveCode = '*', @sEMail = '$email', @VerificationCode = '$get_code'");
                    if ($insert_data) {
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
                        $mail->Subject = 'Registering Account ' . $username . '';
                        $mail->Body = 'Hi ' . $username . ',

Thank you for registering account in Forever Lost. 
Before we started, we need to confirm if you Registering the account. 
Thats why we need you to Verify your account by clicking the link in below.

https://reborn.forever-ls.co/Web/backend/verify.php?verification_code=' . $get_code . '

Dont worry, the verification just one time.

- Forever Lost';
                        $mail->send();
                        setAlert("Register account success. Please check your email to verify your account!", '0');
                    } else {
                        setAlert("Server Error.", '2');
                    }
                }
            }
        }
    }
}
