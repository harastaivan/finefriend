<?php

include('other/menu.php');

echo "  <div class='w3-row'>
            <div class='w3-col l7 w3-padding-xxlarge'>";

include("status.php");


$feed = returnFollowedFeed($_SESSION['user']->id);
$users = selectAllUsers();


foreach( $feed as $status ) {
    foreach($users as $user) {
        $thisUser = $user->getUserById($status['author_id']);
        if($thisUser){
            break;
        }
    }

    echo "  <div class='padding-medium margin-top-medium w3-$thisUser->color gradient w3-round-medium'>
                <div class='w3-row relative-parent'>
                    <div class='w3-col' style='width:100px'>
                        <div class='avatar' style='background-image:url(" . $thisUser->image . ")'></div>
                    </div>
                    <div class='w3-rest padding-horizontal-medium'>
                        <div>
                            <h3><a href='?profile=$thisUser->id'>$thisUser->fullname</a></h3>
                            " . $status['text'] . "
                        </div>
                    </div>
                    <div class='time'>
                        " . showTime($status['timestamp']) . " ago
                    </div>
                </div>
            </div>";
}

echo "</div>";

?>
