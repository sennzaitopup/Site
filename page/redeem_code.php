<div class="d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px; margin-top: 100px;">
            <div class="card-body">
                <h1 class="text-custom text-uppercase fw-bold">Redeem Code</h1>
                <p class="text-custom fw-bold">Pro tip: I dont know :/</p>
                <hr>
                <div class="register-account">
                    <div id="result"></div>
                    <label for="code">
                        <input id="code" type="text" required minlength="4" maxlength="32" />
                        <div class="label-text">Redeem Voucher</div>
                    </label>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="onSubmit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $(".onSubmit").click(function() {
            post();
            var code = $('#code').val();
            $.ajax({
                url: './page/backend/redeem_code.php',
                data: {
                    code: code
                },
                type: 'POST',
                dataType: 'html',
                success: function(result) {
                    hasil();
                    $("#result").html(result);
                }
            });
        });
    });
</script>