<?php 

if ( isset($_POST['register']) ) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $pw1 = $_POST['password1'];
    $pw2 = $_POST['password2'];
    $pwHash = password_hash($pw1, PASSWORD_DEFAULT);
    $img = $_POST['image'];
    $color = $_POST['color'];
    $time = time();

    //shoduji se hesla
    if ( $pw1 == $pw2 ) {
        $query = "SELECT email FROM users WHERE email LIKE '$email'";
        $result = $conn->query($query);

        $rowcount = mysqli_num_rows($result);

        if ( $rowcount == 0 ) {

            if (empty($img) || $img == '') {
                $img = 'https://i.gyazo.com/41fd490efd0ca48c391025113a130a68.png';
            }

            $query =    "INSERT INTO users (name, surname, email, password, profilepic, color, timestamp) 
                        VALUES ('$name', '$surname', '$email', '$pwHash', '$img', '$color', $time)";

            $result = $conn->query($query);

            if ($result) {
                $msg = 'You are successfully registered!';
                $pre_msg = "<div class='w3-panel w3-green w3-card-8 alertpanel'>";
            } else {
                $msg = 'Try again :(';
                $pre_msg = "<div class='w3-panel w3-yellow w3-card-8 alertpanel'>";
            }
        } else {
            $msg = 'Email already in use :(';
            $pre_msg = "<div class='w3-panel w3-yellow w3-card-8 alertpanel'>";
        }

    } else {
        $msg = "Passwords don't match :(";
        $pre_msg = "<div class='w3-panel w3-red w3-card-8 alertpanel'>";
    }
    echo $pre_msg;
    echo $msg;
    echo '</div>';

}

?>
