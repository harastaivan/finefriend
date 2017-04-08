<?php



echo "  <div class='padding-medium'>
            <h2>Change Your Settings</h2>";

showSettings($_SESSION['user']);

echo "  <div class='w3-panel w3-red padding-medium margin-horizontal-auto'>
            After changing settings, you will be logged out.
            <b>To avoid it, go back!</b>
        </div>";


echo "  </div>";

?>