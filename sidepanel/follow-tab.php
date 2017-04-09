<?php
    
echo "  <div class='padding-horizontal-medium whoToFollow'>
        <h2><a href='?whoToFollow=1'>Who To Follow</a></h2>";

$users = selectAllUsers();

if ($_SESSION["page"] != "?whoToFollow=1") {
    $howMuch = 5;
}

foreach ($users as $user) {
    if( $user->id !== $_SESSION["user"]->id && !$_SESSION["user"]->doIFollowHim($user)) {
        showUser($user, $_SESSION['page']);
        if (isset($howMuch)) {
            $howMuch--;
            if ($howMuch <= 0) {
                break;
            }
        }
    }
}

echo "</div>";

?>
