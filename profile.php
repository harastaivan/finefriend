<?php
$users = selectAllUsers();
foreach ($users as $user) {
    $thisUser = $user->getUserById($_GET['profile']);
    if($thisUser) {
        break;
    }
}
//echo "<pre>";
//print_r($thisUser);
//echo "</pre>";
?>
   

   
<div class="w3-row w3-black height-200">
    <div class='avatar big-avatar' style='background-image:url("<?php echo $thisUser->image; ?>")'></div>
</div>
<div class="w3-row height-200 gradient w3-<?php echo $thisUser->color; ?>">
    <div class="w3-col l4 margin-horizontal-auto">
        <?php echo showFollowAndMessage($thisUser, $_SESSION['page']); ?>
    </div>
    <div class="w3-col l4 height-200">
        
        <?php echo "<span class='profile'><a href='?profile=" . $thisUser->id . "'>" . $thisUser->fullname . "</a></span>" ?>
    </div>
    <div class="w3-col l4 margin-horizontal-auto">
        Show Followers
    </div>


</div>
<div class="w3-row w3-padding-xxlarge">
    <?php
    $feed = $thisUser->returnIndividualFeed();
    foreach( $feed as $status ) {
        echo "  <div class='padding-medium margin-top-medium w3-$thisUser->color gradient feed'>
                    <div class='w3-row'>
                        <div class='w3-col' style='width:100px'>
                            <div class='avatar' style='background-image:url(" . $thisUser->image . ")'></div>
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
    
    
    ?>
</div>