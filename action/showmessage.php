<?php

$sender = clone $_SESSION['user'];

$users = selectAllUsers();
foreach ($users as $user) {
    $recipient = $user->getUserById($_GET['message']);
    if($recipient) {
        break;
    }
}

//zacatek labelu
echo '  <div id="modal" class="w3-modal" style="display: block">
          <div class="w3-modal-content">
            <div class="w3-container">
              <span onclick="document.getElementById(\'modal\').style.display=\'none\'; location.href=\'index.php' . $_SESSION['page'] . '\'"
              class="w3-button w3-display-topright">&times;</span>
              <h2>Messages with ' . $recipient->fullname . ':</h2>';

showMessages($sender, $recipient);

echo "  <form>
            <div class='w3-row'>
                <textarea name='text' placeholder='Type a message...' required></textarea>
            </div>
            <div class='w3-row'>
                <input type='submit' value='Send'>
            </div>
            <input type='hidden' name='sendAMessage' value='1'>
            <input type='hidden' name='who' value='$sender->id'>
            <input type='hidden' name='whom' value='$recipient->id'>
        </form>";





//konec labelu
echo "  </div>
    </div>
</div>";

?>