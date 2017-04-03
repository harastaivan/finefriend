<?php

$contactedUserIds = array();
$users = selectAllUsers();


foreach ($users as $user) {
    $msgs = returnMessages($user->id, $_SESSION['user']->id); //vsechny zpravy mezi $user a session user
    while($msg = mysqli_fetch_array($msgs)) {
        $messages[] = $msg; 
    }
    
    $last = end($messages); //posledni prvek v messages, abych vytvoril users
    if ( ($last['sender_id'] == $_SESSION['user']->id) && (!in_array($last['recipient_id'], $contactedUserIds)) ) {
        $contactedUserIds[] = $last['recipient_id'];
    } else if ( ($last['recipient_id'] == $_SESSION['user']->id) && (!in_array($last['sender_id'], $contactedUserIds)) ) {
        $contactedUserIds[] = $last['sender_id'];
    }
    
    foreach ($contactedUserIds as $userId) {
        $contactedUser = $user->getUserById($userId);
        if($contactedUser) {
            $contactedUsers[] = $contactedUser;
        }
    }

    
}

echo '  <div class="padding-horizontal-medium padding-top-large padding-bottom-large">
        <h2><a href=\'?messages=1\'>Messages</a></h2>';


foreach ($contactedUsers as $cU) {
    $msgs = returnMessages($cU->id, $_SESSION['user']->id);
    while($msg = mysqli_fetch_array($msgs)) {
        $messages[] = $msg; 
    }
    $lastMsg = end($messages)['text'];
    echo "  <div class='w3-row message'>
                <div class='w3-col' style='width:100px'>
                    <div class='avatar' style='background-image:url($cU->image)'></div>
                </div>
                <div class='w3-rest'>
                    <div class='w3-container'>
                        <h3><a href='?message=$cU->id'>$cU->fullname</a></h3>
                        <b>Last:</b> $lastMsg                            
                    </div>
                </div>
            </div>";


}

echo "</div>";

?>
