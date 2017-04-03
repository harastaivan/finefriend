<?php
$sender = $_SESSION['user'];

$users = selectAllUsers();
foreach ($users as $user) {
    $recipient = $user->getUserById($_GET['message']);
    if($recipient) {
        break;
    }
}

//zacatek labelu
echo '  <div id="id01" class="w3-modal" style="display: block">
          <div class="w3-modal-content">
            <div class="w3-container">
              <span onclick="document.getElementById(\'id01\').style.display=\'none\'; location.href=\'index.php\'"
              class="w3-button w3-display-topright">&times;</span>
              <h2>Messages with ' . $recipient->fullname . ':</h2>';

showMessages($sender->id, $recipient->id);

echo "  <form>
            <textarea name='text'></textarea>
            <input type='submit' value='Send'>
            <input type='hidden' name='sendAMessage' value='1'>
            <input type='hidden' name='who' value='$sender->id'>
            <input type='hidden' name='whom' value='$recipient->id'>
        </form>";





//konec labelu
echo          '</div>
          </div>
        </div>';

?>