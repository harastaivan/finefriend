<div class="padding-horizontal-medium">
<h2><a href='?whoToFollow=1'>Who To Follow</a></h2>
<!--
<div class="w3-row">
    <div class="w3-col" style="width:100px">
        <div class="avatar" style="background-image:url(http://www.postavy.cz/obrazky-thumbs/wiki/thomas-angelo-33227-wikithumb.jpg)">
        </div>
    </div>
    <div class="w3-rest padding-horizontal-medium">
        <h3><a href="?profile=27">Tom Angelo</a></h3>
        <a href='#'>Add a Friend</a>
    </div>
</div>
-->
<?php

$users = selectAllUsers();
//echo "<pre>";
//print_r($users);
//echo "</pre>";

foreach ($users as $user) {
    if( $user->id !== $_SESSION["user"]->id ) {
        showUser($user, $_SESSION['page']);
    }
}

?>
</div>