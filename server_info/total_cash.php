<?php

error_reporting(0);


function PecahanRupiah()
{
    require_once("../config/connect.php");
    $query = odbc_exec($Connection, "SELECT SUM(realCash) as CashForever FROM userMoneyDB");
    $getdata = odbc_fetch_object($query);
    $total_cash = $getdata->CashForever;

    $total_fcash = number_format($total_cash, 0, '.', '.');
    if ($total_cash > 1000) {

        $x = ($total_cash);
        $x_number_format = number_format($x);
        $x_array = explode(',', $x_number_format);
        $x_parts = array('k', 'm', 'b', 't');
        $x_count_parts = count($x_array) - 1;
        $x_display = $x;
        $x_display = $x_array[0] . ((int) $x_array[1][0] !== 0 ? '.' . $x_array[1][0] : '');
        $x_display .= $x_parts[$x_count_parts - 1];

        return $x_display;
    }
}


echo PecahanRupiah($total_cash) . ' Cash';
