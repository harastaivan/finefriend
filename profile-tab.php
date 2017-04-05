<?php

echo "  <div class='w3-row padding-medium' id='profileTab'>
            <div class='w3-col' style='width:100px'>
                <div class='avatar' style='background-image:url(" . $_SESSION['user']->image . ")'></div>
            </div>
            <div class='w3-rest padding-horizontal-medium'>
                <div>
                    <h3><a href='?profile=" . $_SESSION['user']->id . "'>" . $_SESSION['user']->fullname . "</a></h3>
                    <a href='#'>Nastavení účtu</a> | 
                    <a href='#'>LUL</a> | 
                    <a href='#'>ZULUL</a> | 
                    <a href='#'>LUL</a> | 
                    <a href='?logout=1'>Odhlásit se</a>
                </div>
            </div>
        </div>";

?>
