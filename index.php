<?php

include('other/init.php');

session_start();

include('other/head.php');
include('other/logo.php');

//log out
if ( isset($_GET['logout']) ) {
    unset($_SESSION['user']);
    echo "<script>location.href='index.php';</script>";
}

//logged in
if ( isset($_SESSION['user']) ) {
    //actions
    if ( isset($_GET['follow']) ) {
        follow($_SESSION['user']->id, $_GET['follow']);
    } else if ( isset($_GET['unfollow']) ) {
        unfollow($_SESSION['user']->id, $_GET['unfollow']);
    } else if ( isset($_GET['new_status']) ) {
        createStatus($_SESSION['user']->id, $_GET['text']);
        echo "<script>location.href = 'index.php" . $_SESSION['page'] . "'</script>";
    } else if ( isset($_GET['message']) ) {
        include('action/showconversation.php');
    } else if ( isset($_GET['sendAMessage']) ) {
        sendAMessage($_GET['who'], $_GET['whom'], $_GET['text']);
        echo "<script>location.href=`index.php" . $_SESSION['page'] . "`</script>";
    } else if ( isset($_GET['changeSettings']) ) {
        changeSettings($_GET);
        echo "<script>location.href='index.php'</script>";
    }

    //pages
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
    require('login/login-form.php');
    require('login/register-form.php');
}

include('other/footer.php');

?>
