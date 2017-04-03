<?php 
//echo "<pre>";
//print_r($_SESSION['user']);
//echo "</pre>";
?>
<div class='w3-row'>
    <!--PRVNI SLOUPEC-->
    <div class='w3-col l7 w3-padding-xxlarge'>
        <!--NAPSAT STATUS-->
        <div class='w3-border-top w3-topbar w3-bottombar w3-border-black padding-medium margin-top-large'><!--w3-round-xxlarge-->
            <div class='w3-row'>
                <div class='w3-col' style='width:100px'>
                    <div class='avatar' style='background-image:url("<?php echo $_SESSION['user']->image; ?>")'></div>
                </div>
                <div class='w3-rest padding-horizontal-medium'>
                    <?php

                    echo "<h3><a href='?profile=" . $_SESSION['user']->id . "'>" . $_SESSION['user']->fullname . "</a></h3>";
                    echo "<form><input class='w3-input' type='text' placeholder='Write a status...' name='text'>";
                    echo "<input type='hidden' name='new_status' value=1></form>";
                    echo "<input type='submit' style='display:none'></form>";

                    ?>
                </div>
            </div>
        </div>
        <!--VYPIS STATUSU-->
        
        <?php
        $feed = returnFollowedFeed($_SESSION['user']->id);
        $users = selectAllUsers();
        
        
        foreach( $feed as $status ) {
            foreach($users as $user) {
                $thisUser = $user->getUserById($status['author_id']);
                if($thisUser){
                    break;
                }
            }
            
            echo "  <div class='padding-medium margin-top-medium w3-$thisUser->color gradient feed'>
                        <div class='w3-row'>
                            <div class='w3-col' style='width:100px'>
                                <div class='avatar' style='background-image:url(" . $thisUser->image . ")'></div>
                            </div>
                            <div class='w3-rest padding-horizontal-medium'>
                                <div>
                                    <h3><a href='?profile=$thisUser->id'>$thisUser->fullname</a></h3>
                                    " . $status['text'] . "
                                </div>
                            </div>
                            
                        </div>
                    </div>";
        }


        ?>
    </div>