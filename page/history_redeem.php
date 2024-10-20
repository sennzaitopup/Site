<div class="d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px; margin-top: 100px;">
            <div class="card-body">
                <h1 class="text-custom text-uppercase fw-bold">History Redeem</h1>
                <hr>
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-dark border-dark border border-primary">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">Item</th>
                                <th scope="col">Date Claim</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            require_once("../config/connect.php");

                            session_start();

                            $Data = $_SESSION['username'];

                            $query = odbc_exec($Connection, "SELECT * FROM LSForever_Redeem_History WHERE username = '$Data' ORDER by date DESC");
                            while ($row = odbc_fetch_object($query)) {

                            ?>

                                <tr class="text-white">
                                    <td><?= $row->item; ?></td>
                                    <td><?= $row->date; ?></td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>