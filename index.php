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
        //include('sidepanel.php');
        
    } else if ( isset($_GET['unfollow']) ) {
        
        unfollow($_SESSION['user']->id, $_GET['unfollow']);
        //include('feed.php');
        //include('sidepanel.php');
        
    } else if ( isset($_GET['new_status']) ) {
        createStatus($_SESSION['user']->id, $_GET['text']);
        echo "<script>location.href = 'index.php'</script>";
    } else if ( isset($_GET['message']) ) {
        $_SESSION['page'] = "?messages=" . $_GET['message'];
        include('message.php');
    } else if ( isset($_GET['sendAMessage']) ) {
        include('sendamessage.php');
    } else if ( isset($_GET['change']) ) {
        include('changesettings.php');
    }
    
    if ( isset($_GET['profile']) ) {
        $_SESSION['page'] = "?profile=" . $_GET['profile'];
        include('profile.php');
    } else if ( isset($_GET['messages']) ) {
        $_SESSION['page'] = "?messages=" . $_GET['messages'];
        include('messages.php');
    } else if ( isset($_GET['whoToFollow']) ) {
        $_SESSION['page'] = "?whoToFollow=" . $_GET['whoToFollow'];
        include('follow.php');
    } else if ( isset($_GET['changeSettings']) ) {
        $_SESSION['page'] = "?changeSettings=" . $_GET['changeSettings'];
        include('settings.php');
    } else {
        $_SESSION['page'] = "?feed=1";
        include('feed.php');
        include('sidepanel.php'); 
    }  
    
} else {
    include('login/login.php');
}

include('other/footer.php');

?>
