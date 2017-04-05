<?php

echo "  <div class='w3-row w3-hide-large w3-border-bottom w3-border-black w3-bottombar' id='menu'>
            <div class='w3-col s4 m4 w3-padding-small w3-center w3-" . $_SESSION['user']->color . "'>
                <h3><a href='?profile=" . $_SESSION['user']->id . "'>Profile</a></h3>
            </div>
            <div class='w3-col s4 m4 w3-padding-small w3-center darker-gray w3-text-white'>
                <h3><a onclick='showMessages()'>Messages</a></h3>
            </div>
            <div class='w3-col s4 m4 w3-padding-small w3-center dark-gray w3-text-white'>
                <h3><a onclick='showWhoToFollow()'>Follow</a></h3>
            </div>
        </div>";

?>
