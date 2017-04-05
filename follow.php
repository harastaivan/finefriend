<?php
    
echo "  <div class='padding-horizontal-medium' id='whoToFollow'>
        <h2><a href='?whoToFollow=1'>Who To Follow</a></h2>";

$users = selectAllUsers();

foreach ($users as $user) {
    if( $user->id !== $_SESSION["user"]->id ) {
        showUser($user, $_SESSION['page']);
    }
}

echo "</div>";

?>
