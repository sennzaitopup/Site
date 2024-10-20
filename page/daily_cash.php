<div class="d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px; margin-top: 100px;">
            <div class="card-body">
                <h1 class="text-custom text-uppercase fw-bold">Daily Cash</h1>
                <p class="text-custom fw-bold">Pro tip: Pray before use this feature!</p>
                <hr>
                <div class="register-account">
                    <div id="result"></div>
                    <div class="text-custom text-center">
                        You can get the free cash from 500 - 400 Cash for everyday.
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="onSubmit" id="dummy">Submit</button>
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
            var dummy = $('#dummy').val();
            $.ajax({
                url: './page/backend/daily_cash.php',
                data: {
                    dummy: dummy
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