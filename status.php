<?php

echo "  <div class='w3-border-top w3-topbar w3-bottombar w3-border-black padding-medium margin-top-large'><!--w3-round-xxlarge-->
            <div class='w3-row'>
                <div class='w3-col' style='width:100px'>
                    <div class='avatar' style='background-image:url(" . $_SESSION['user']->image . ")'></div>
                </div>
                <div class='w3-rest padding-horizontal-medium'>
                    <h3><a href='?profile=" . $_SESSION['user']->id . "'>" . $_SESSION['user']->fullname . "</a></h3>
                    <form><input class='w3-input' type='text' placeholder='Write a status...' name='text'>
                    <input type='hidden' name='new_status' value=1></form>
                    <input type='submit' style='display:none'></form>
                </div>
            </div>
        </div>";

?>
