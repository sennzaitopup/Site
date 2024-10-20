<?php

$Argument = 'DRIVER={SQL Server};SERVER=YOUR_SERVER_IP,1433;DATABASE=LosaLogData';
$username = '';
$password = '';

$Connection = odbc_connect($Argument, $username, $password);
