<?php
error_reporting(0);

include_once("../../config/connect.php");
include_once("../../function/setAlert.php");

session_start();

$Data = $_SESSION['username'];

$code = $_POST['code'];

if (!preg_match("/^[a-zA-Z0-9]+$/", $code)) {
    setAlert("Symbol is not allowed.", '1');
} else {
    $query = odbc_exec($Connection, "SELECT * FROM userMemberDB WHERE userID = '$Data'");
    while ($rows = odbc_fetch_object($query)) {
        $nickname = $rows->nickName;
    }

    $query1 = odbc_exec($Connection, "SELECT * FROM LSForever_Code WHERE code = '$code'");
    while ($rows1 = odbc_fetch_object($query1)) {
        $item_code = $rows1->item_code;
        $item_name = $rows1->item_name;
        $expired = $rows1->expired;
        $present_type = $rows1->present_type;
        $value2 = $rows1->value2;
    }

    $cek_redeem = odbc_exec($Connection, "SELECT * FROM LSForever_Redeem WHERE username = '$Data' AND code = '$code'");
    $total_redeem = odbc_num_rows($cek_redeem);

    $Date = date('Y-m-d H:i:s');

    if ($code == "") {
        setAlert("Invalid Data.", '1');
    } else {
        if ($item_code == "") {
            setAlert("Invalid Code Redeem.", '1');
        } else {
            if ($Date > $expired) {
                setAlert("This Voucher is Expired", '1');
            } else {
                if ($total_redeem != 0) {
                    setAlert("You already claim this item.", '2');
                } else {
                    $query = odbc_exec($Connection, "exec game_present_add @sendNick = 'DeveloperK', @receiveNick = '$nickname', @persentType = '$present_type', @value1 = '$item_code', @value2 = '$value2', @value3 = '0', @value4 = '0', @msgType = '1040', @limitDate = '$expired', @flag = '0'");
                    if ($query) {
                        odbc_exec($Connection, "INSERT INTO LSForever_Redeem VALUES ('$Data', '$code')");
                        odbc_exec($Connection, "INSERT INTO LSForever_Redeem_History VALUES ('$Data', '$item_name', '$Date')");
                        setAlert("Success claim the item. Please check your inventory!", '0');
                    } else {
                        setAlert("Server Error.", '2');
                    }
                }
            }
        }
    }
}
