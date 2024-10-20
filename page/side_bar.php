<?php

require_once("./config/connect.php");

session_start();

$Data = $_SESSION['username'];

$query = odbc_exec($Connection, "SELECT * FROM userMemberDB INNER JOIN userMoneyDB ON userMemberDB.accountIDX = userMoneyDB.accountIDX JOIN userGameDB ON userMemberDB.accountIDX = userGameDB.accountIDX WHERE userID = '$Data'");

while ($row = odbc_fetch_object($query)) {
    $cash = number_format($row->realCash, 0, '.', '.');
    $bonuscash = number_format($row->bonusCash, 0, '.', '.');
    $peso = number_format($row->gameMoney, 0, '.', '.');
    $exp = number_format($row->userEXP, 0, '.', '.');
}

?>
<div id="konten">
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px;">
                <div class="card-body">
                    <div class="text-uppercase fw-bold px-5">
                        <div class="d-flex justify-content-center">
                            <img src="https://lostsaga.xyz/uploads/20190314172543.png" class="img-fluid border rounded">
                        </div>
                        <h3 class="text-custom text-center mt-5 mb-3"><?= $nickname; ?></h3>
                        <p class="text-custom text-center"><?= $email; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px;">
                <div class="card-body">
                    <div class="text-custom text-center">
                        Welcome to our new website! Please do not give your data account to anyone. For the donation, please contact Developer at discord.
                        <hr>
                        <h3 class="fw-bold fs-3">Your details account</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-dark border-dark border border-primary">
                            <thead>
                                <tr class="text-white">
                                    <th scope="col">Cash</th>
                                    <th scope="col">Bonus Cash</th>
                                    <th scope="col">Peso</th>
                                    <th scope="col">EXP</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?= $cash; ?></td>
                                    <td><?= $bonuscash; ?></td>
                                    <td><?= $peso; ?></td>
                                    <td><?= $exp; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px;">
                    <div class="card-body">
                        <div class="text-uppercase fw-bold px-5">
                            <h1 class="text-custom">Server info</h1>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow-lg" style="background: hsl(204 100% 5%); border-radius: 15px;">
                                        <div class="card-body" style="padding: 35px;">
                                            <div class="d-flex justify-content-center">
                                                <a class="fw-bold text-custom fs-2 text-center"> Server Ping</a>
                                            </div>
                                            <p class="fw-bold text-white text-center" id="ping"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow-lg" style="background: hsl(204 100% 5%); border-radius: 15px;">
                                        <div class="card-body" style="padding: 35px;">
                                            <div class="d-flex justify-content-center">
                                                <a class="fw-bold text-custom fs-2 text-center"> Total User</a>
                                            </div>
                                            <p class="fw-bold text-white text-center" id="total_account"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card shadow-lg" style="background: hsl(204 100% 5%); border-radius: 15px;">
                                        <div class="card-body" style="padding: 35px;">
                                            <div class="d-flex justify-content-center">
                                                <a class="fw-bold text-custom fs-2 text-center"> Total Guild</a>
                                            </div>
                                            <p class="fw-bold text-white text-center" id="total_guild"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="card shadow-lg" style="background: hsl(204 100% 5%); border-radius: 15px;">
                                        <div class="card-body" style="padding: 35px;">
                                            <div class="d-flex justify-content-center">
                                                <a class="fw-bold text-custom fs-2 text-center"> Total F-Cash</a>
                                            </div>
                                            <p class="fw-bold text-white text-center" id="total_f-cash"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="card shadow-lg" style="background: hsl(204 100% 5%); border-radius: 15px;">
                                        <div class="card-body" style="padding: 35px;">
                                            <div class="d-flex justify-content-center">
                                                <a class="fw-bold text-custom fs-2 text-center"> Total Online</a>
                                            </div>
                                            <p class="fw-bold text-white text-center" id="total_online"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ping Server JQUery -->
<script>
    setInterval(function() {
        $('#ping').load('./server_info/ping.php');
        $('#total_account').load('./server_info/total_account.php');
        $('#total_guild').load('./server_info/total_guild.php');
        $('#total_online').load('./server_info/total_online.php');
        $('#total_f-cash').load('./server_info/total_cash.php');
    }, 1000);
</script>