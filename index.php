<?php

include('other/init.php');

session_start();

include('other/head.php');
include('other/logo.php');



//odhlasit se
if ( isset($_GET['logout']) ) {
    unset($_SESSION['user']);
    echo "<script>location.href='index.php';</script>";
}

//je prihlasen
if ( isset($_SESSION['user']) ) {
    if ( isset($_GET['follow']) ) {
        
        follow($_SESSION['user']->id, $_GET['follow']);
        //include('feed.php');
        //include('sidepanel/sidepanel.php');
        
    } else if ( isset($_GET['unfollow']) ) {
        
        unfollow($_SESSION['user']->id, $_GET['unfollow']);
        //include('feed.php');
        //include('sidepanel/sidepanel.php');
        
    } else if ( isset($_GET['new_status']) ) {
        createStatus($_SESSION['user']->id, $_GET['text']);
        echo "<script>location.href = 'index.php'</script>";
    } else if ( isset($_GET['message']) ) {
        include('action/showmessage.php');
    } else if ( isset($_GET['sendAMessage']) ) {
        include('action/sendamessage.php');
    } else if ( isset($_GET['changeSettings']) ) {
        include('action/changesettings.php');
    }
    
    if ( isset($_GET['profile']) ) {
        $_SESSION['page'] = "?profile=" . $_GET['profile'];
        include('profile.php');
    } else if ( isset($_GET['messages']) ) {
        $_SESSION['page'] = "?messages=" . $_GET['messages'];
        include('sidepanel/messages-tab.php');
    } else if ( isset($_GET['whoToFollow']) ) {
        $_SESSION['page'] = "?whoToFollow=" . $_GET['whoToFollow'];
        include('sidepanel/follow-tab.php');
    } else if ( isset($_GET['showSettings']) ) {
        $_SESSION['page'] = "?showSettings=" . $_GET['showSettings'];
        include('action/showsettings.php');
    } else {
        $_SESSION['page'] = "?feed=1";
        include('feed.php');
        include('sidepanel/sidepanel.php'); 
    }  
    
} else {
    include('login/login.php');
}

include('other/footer.php');

?>
