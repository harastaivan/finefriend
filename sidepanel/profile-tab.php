<?php

echo "  <div class='w3-row padding-medium profileTab'>
            <div class='w3-col' style='width:100px'>
                <div class='avatar' style='background-image:url(" . $_SESSION['user']->image . ")'></div>
            </div>
            <div class='w3-rest padding-horizontal-medium'>
                <div>
                    <h3><a href='?profile=" . $_SESSION['user']->id . "'>" . $_SESSION['user']->fullname . "</a></h3>
                    <a href='?showSettings=1'>Change settings</a> | 
                    <a href='?logout=1'>Log Out</a>
                </div>
            </div>
        </div>";

?>
