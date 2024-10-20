<?php
// Ping Server
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}

$start = microtime_float();
$fp = fsockopen('203.128.90.138', 80, $errno, $errstr, 30);
$end = microtime_float();
$ms = ($end - $start) * 1000;
$ping = number_format((float)$ms, 0, '.', '');

if ($ping > 1 & $ping < 19) {
    $status = "Perfect";
} else {
    if ($ping > 20 & $ping < 49) {
        $status = "Normal";
    } else {
        if ($ping > 50 & $ping < 99) {
            $status = "Playable";
        } else {
            if ($ping > 100 & $ping < 199) {
                $status = "Lag";
            } else {
                $status = "Delay";
            }
        }
    }
}


echo $ping . ' ms ' . $status;
