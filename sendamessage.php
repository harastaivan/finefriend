<?php
    print_r($_GET);
    $result = sendAMessage($_GET['who'], $_GET['whom'], $_GET['text']);
    if($result) {
        echo "success";
    } else {
        echo "Somewhere is a problem! :(";
    }
?>