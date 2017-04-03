<?php 

if ( isset($_POST['login']) ) {
    
    $email = $_POST['email'];
    $pw = $_POST['password'];
    $query = "SELECT * FROM users WHERE email LIKE '$email'";
    $result = $conn->query($query);

    $rowcount = mysqli_num_rows($result);

    if ($rowcount == 0) {
        //email nenalezen
        $pre_msg = "<div class='w3-panel w3-red w3-card-8 alertpanel'>";
        $msg = 'Wrong email!';

    } else {
        $user = mysqli_fetch_array($result);
        
        if ( password_verify($pw, $user['password']) ) {
            //prihlasen
            $pre_msg = "<div class='w3-panel w3-green w3-card-8 alertpanel'>";
            $msg = "You are logged in!";
            $loggedIn = new User($user);
            $_SESSION['user'] = clone $loggedIn;
            echo "<script>setTimeout(function(){location.href='index.php'}, 2000);</script>";
        } else {
            //spatne heslo
            $pre_msg = "<div class='w3-panel w3-red w3-card-8 alertpanel'>";
            $msg = 'Wrong password!';
        }

    }
    echo $pre_msg;
    echo $msg;
    echo "</div>";

}

?>
