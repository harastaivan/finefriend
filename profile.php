<?php
$users = selectAllUsers();
foreach ($users as $user) {
    $thisUser = $user->getUserById($_GET['profile']);
    if($thisUser) {
        break;
    }
}

echo "  <div class='w3-row w3-black height-200'>
            <div class='avatar big-avatar' style='background-image:url($thisUser->image)'></div>
        </div>
        <div class='w3-row height-200 gradient w3-$thisUser->color'>
            <div class='w3-col l4 margin-horizontal-auto'>";

                showFollowAndMessage($thisUser, $_SESSION['page']);

echo "      </div>
            <div class='w3-col l4 height-200'>
                <span class='profile'><a href='?profile=$thisUser->id'>$thisUser->fullname</a></span>
            </div>
            <div class='w3-col l4 margin-horizontal-auto'>
                Show Followers
            </div>
        </div>
        <div class='w3-row w3-padding-xxlarge'>";

$feed = $thisUser->returnIndividualFeed();

foreach( $feed as $status ) {
    
    echo "  <div class='padding-medium margin-top-medium w3-$thisUser->color gradient feed'>
                <div class='w3-row'>
                    <div class='w3-col' style='width:100px'>
                        <div class='avatar' style='background-image:url($thisUser->image)'></div>
                    </div>
                    <div class='w3-rest padding-horizontal-medium'>
                        <div>
                            <h3><a href='#'>$thisUser->fullname</a></h3>
                            " . $status['text'] . "
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    
}

?>
