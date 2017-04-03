<div class='w3-row'>
    <div class='w3-col l6 w3-padding-large w3-border-right w3-center w3-border-black w3-rightbar'>
        <h2>You don't have an account yet?</h2>
        <h2>Register.</h2>
        <div class='w3-container register'>
            <form method="post">
                <div class='w3-row'>
                    <div class='w3-col l6'>
                        <input type='text' placeholder='Name' class='w3-input' name='name' required>
                    </div>
                    <div class='w3-col l6'>
                        <input type='text' placeholder='Surname' class='w3-input' name='surname' required>
                    </div>
                </div>
                <div class='w3-row'>
                    <div class='w3-col l12'>
                        <input type='email' placeholder='Email' class='w3-input' name='email' required>
                    </div>
                </div>
                <div class='w3-row'>
                    <div class='w3-col l6'>
                        <input type='password' placeholder='Password' class='w3-input' name='password1' minlength=5 required>
                    </div>
                    <div class='w3-col l6'>
                        <input type='password' placeholder='Confirm Password' class='w3-input' name='password2' minlength=5 required>
                    </div>
                </div>
                <div class='w3-row'>
                    <div class='w3-col l12'>
                        <input type='text' placeholder='Profile picture (URL)' class='w3-input' name='image'>
                    </div>
                </div>
                <div class='w3-row'>
                    <div class='w3-col l12 colors'>
                        <p class='w3-text-gray'>Choose your favorite color:</p>
                        <input type='radio' id='red' name='color' value='red'>
                        <label for='red'><span class='w3-red'></span></label>

                        <input type='radio' id='pink' name='color' value='pink'>
                        <label for='pink'><span class='w3-pink'></span></label>  

                        <input type='radio' id='orange' name='color' value='orange'>
                        <label for='orange'><span class='w3-orange'></span></label>

                        <input type='radio' id='green' name='color' value='green'>
                        <label for='green'><span class='w3-green'></span></label>

                        <input type='radio' id='teal' name='color' value='teal'>
                        <label for='teal'><span class='w3-teal'></span></label>

                        <input type='radio' id='cyan' name='color' value='cyan'>
                        <label for='cyan'><span class='w3-cyan'></span></label>

                        <input type='radio' id='blue' name='color' value='blue'>
                        <label for='blue'><span class='w3-blue'></span></label>

                        <input type='radio' id='indigo' name='color' value='indigo' checked>
                        <label for='indigo'><span class='w3-indigo'></span></label>

                        <input type='radio' id='black' name='color' value='black'>
                        <label for='black'><span class='w3-black'></span></label>
                    </div>
                </div>
                <div class='w3-row'>
                    <div class='w3-col l12'>
                        <input type='submit' class='w3-input w3-indigo' value='Register!'>
                        <input type='hidden' name='register' value='1'>
                    </div>
                </div>
                <div class='w3-row'>
                    <div class='w3-col l12 w3-center'>
                        <?php require('validate-register.php'); ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
