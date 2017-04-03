<?php

echo "  <div class='w3-col l5 w3-padding-xxlarge w3-hide-medium w3-hide-small'>
            <div class='padding-medium left-thick-border border-black gradient margin-top-large w3-" . $_SESSION['user']->color . "'>
                <div class='w3-row'>
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
                </div>
            </div>
            <div class='left-thick-border border-darker-gray'>";

include("messages.php"); 

echo "      </div>
            <div class='left-thick-border border-dark-gray'>";

include("follow.php");

echo "      </div>
        </div>
    </div>";

?>
