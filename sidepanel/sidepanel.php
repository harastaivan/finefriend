<?php

echo "  <div class='w3-col l5 w3-padding-xxlarge w3-hide-medium w3-hide-small'>
            <div class='left-thick-border border-black gradient margin-top-large w3-" . $_SESSION['user']->color . "'>";

include("sidepanel/profile-tab.php");
                
echo "      </div>
        <div class='left-thick-border border-darker-gray'>";

include("sidepanel/messages-tab.php"); 

echo "      </div>
            <div class='left-thick-border border-dark-gray'>";

include("sidepanel/follow-tab.php");

echo "      </div>
        </div>
    </div>";

?>
