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
            <div class='w3-display-middle w3-large'><span class='profile'>$thisUser->fullname</span></div>
        </div>
        <div class='w3-row gradient w3-$thisUser->color'>
            <div class='w3-row height-100 w3-hide-medium w3-hide-large'>
                
            </div>
            <div class='w3-row height-200'>
                <div class='w3-col l4 m4 s7 margin-horizontal-auto'>";

                showFollowAndMessage($thisUser, $_SESSION['page']);

echo "          </div>
                <div class='w3-col l4 m4 w3-hide-small margin-horizontal-auto'>
                    &nbsp
                </div>
                <div class='w3-col l4 m4 s5 margin-horizontal-auto'>
                    Show Followers
                </div>
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
            </div>";  
}

echo "  </div>";

?>
