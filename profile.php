<?php
$users = selectAllUsers();
foreach ($users as $user) {
    $thisUser = $user->getUserById($_GET['profile']);
    if($thisUser) {
        break;
    }
}

echo "  <div class='w3-row w3-black height-200 w3-display-container'>
            <div class='avatar big-avatar' style='background-image:url($thisUser->image)'></div>
            <div class='w3-display-middle w3-large'><span class='profile'>$thisUser->fullname</span></div>
        </div>
        <div class='w3-row gradient w3-$thisUser->color'>
            <div class='w3-row height-100 w3-hide-medium w3-hide-large'>
                
            </div>
            <div class='w3-row height-200'>
                <div class='w3-col l4 m4 s7 margin-horizontal-auto line-height-200'>";

if ($_GET["profile"] !== $_SESSION["user"]->id) {
    showFollowAndMessage($thisUser, $_SESSION['page']);
} else {
    echo "<a href='?showSettings=1'>Change settings</a>";
}
                

echo "          </div>
                <div class='w3-col l4 m4 w3-hide-small margin-horizontal-auto line-height-200'>
                    &nbsp
                </div>
                <div class='w3-col l4 m4 s5 margin-horizontal-auto line-height-200'>
                    <a href='" . $_SESSION['page'] . "&showFollowers=$thisUser->id'>Show Followers of $thisUser->name</a>
                </div>
            </div>
        </div>";

if (isset($_GET['showFollowers'])) {
    echo "<div class='w3-row w3-padding-xxlarge'>";
    showFollowers($_GET['showFollowers']);
    echo "</div>";
}

echo "  <div class='w3-row w3-padding-xxlarge'>";



if ($_GET["profile"] == $_SESSION["user"]->id) {
    include("status.php");
}

$feed = $thisUser->returnIndividualFeed();


foreach( $feed as $status ) {
    
    echo "  <div class='padding-medium margin-top-medium w3-$thisUser->color gradient w3-round-medium'>
                <div class='w3-row position-relative'>
                    <div class='w3-col' style='width:100px'>
                        <div class='avatar' style='background-image:url($thisUser->image)'></div>
                    </div>
                    <div class='w3-rest padding-horizontal-medium'>
                        <div>
                            <h3><a href='#'>$thisUser->fullname</a></h3>
                            " . $status['text'] . "
                        </div>
                    </div>
                    <div class='time'>
                        " . showTime($status['timestamp']) . " ago
                    </div>
                </div>
            </div>";  
}

echo "  </div>";

?>
