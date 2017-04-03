    <div class='w3-col l6 w3-padding-large w3-center'>
    <h1>Log In.</h1>
    <div class='w3-container login'>
        <form method="post">
            <div class='w3-row'>
                <div class='w3-col l12'>
                    <input type='email' placeholder='Email' class='w3-input' name='email' required>
                </div>
            </div>
            <div class='w3-row'>
                <div class='w3-col l12'>
                    <input type='password' placeholder='Password' class='w3-input' name='password' required>
                </div>
            </div>
            <div class='w3-row'>
                <div class='w3-col l12'>
                    <input type='submit' class='w3-input w3-indigo' value='Login!'>
                    <input type='hidden' name='login' value='1'>
                </div>
            </div>
            <div class='w3-row'>
                <div class='w3-col l12 w3-center'>
                    <?php require('validate-login.php'); ?>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>