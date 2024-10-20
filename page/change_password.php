<div class="d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card mb-5" style="background: hsl(204 100% 5%); border-radius: 15px; margin-top: 100px;">
            <div class="card-body">
                <h1 class="text-custom text-uppercase fw-bold">Change Password</h1>
                <p class="text-custom fw-bold">Pro tip: Use a stronger password!</p>
                <hr>
                <div class="register-account">
                    <div id="result"></div>
                    <label for="current_password">
                        <input id="current_password" type="password" required minlength="4" maxlength="14" />
                        <div class="label-text">Current Password</div>
                    </label>
                    <label for="new_password">
                        <input id="new_password" type="password" required minlength="4" maxlength="14" />
                        <div class="label-text">New Password</div>
                    </label>
                    <label for="confirmation_password">
                        <input id="confirmation_password" type="password" required minlength="4" maxlength="14" />
                        <div class="label-text">Confirm Password</div>
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
            var current_password = $('#current_password').val();
            var new_password = $('#new_password').val();
            var confirmation_password = $('#confirmation_password').val();
            $.ajax({
                url: './page/backend/change_password.php',
                data: {
                    current_password: current_password,
                    new_password: new_password,
                    confirmation_password: confirmation_password
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