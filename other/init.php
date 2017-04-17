<?php

include('other/connection.php');

function print_r2($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function selectAllUsers() {
    global $conn;
    $query = "  SELECT * FROM users
                ORDER BY timestamp DESC";
    $result = $conn->query($query);
    
    while( $row = mysqli_fetch_array($result) ) {
        $users[] = new User($row);
    }

    return $users;        
}

function showUser($user, $fromWhere) {
    
    echo "<div class='w3-row margin-top-small'><div class='w3-col' style='width:100px'>";
    echo "<div class='avatar' style='background-image:url(" . $user->image . ")'></div>";
    echo "</div>";
    echo "<div class='w3-rest padding-horizontal-medium'>";
    echo "<h3><a href='?profile=" . $user->id . "'>" . $user->fullname . "</a></h3>";
    
    showFollowAndMessage($user, $fromWhere);
    
    echo "</div></div>";
}

function showFollowAndMessage($user, $fromWhere) {
    if ($_SESSION['user']->doIFollowHim($user)) {
        echo "<a href='" . $fromWhere . "&unfollow=$user->id'>Unfollow</a> | ";
    } else {
        echo "<a href='" . $fromWhere . "&follow=$user->id'>Follow</a> | ";
    }
    
    echo "<a href='" . $fromWhere . "&message=$user->id'>Send a Message</a>";
}

function showFollowers($followedId) {
    global $conn;
    $allUsers = selectAllUsers();
    
    $query = "  SELECT users.id, users.name, users.surname, users.email, users.profilepic, users.color, users.timestamp FROM follows
                JOIN users ON users.id = follows.follower_id
                WHERE follows.followed_id = $followedId";
    $result = $conn->query($query);
    
    while($row = mysqli_fetch_array($result)) {
        $user = new User($row);
        if($user->id != $followedId) {
            showUser($user, $_SESSION['page']);
        }
    }
}

function follow($whoId, $whomId) {
    global $conn;
    $time = time();
    $query = "  SELECT * FROM follows
                WHERE follower_id = $whoId AND followed_id = $whomId";
    $result = $conn->query($query);
    
    if(mysqli_num_rows($result) == 0) {
        $query = "  INSERT INTO follows (follower_id, followed_id, timestamp)
                    VALUES ($whoId, $whomId, $time)";
        $result = $conn->query($query);
        return $result;
    }
    
    
}

function unfollow($whoId, $whomId) {
    global $conn;
    $query = "  DELETE FROM follows
                WHERE follower_id = $whoId AND followed_id = $whomId";
    $result = $conn->query($query);
    return $result;
}

function createStatus($userId, $text) {
    global $conn;
    $time = time();
    $query = "  INSERT INTO feed (user_id, text, timestamp)
                VALUES ($userId, '$text', $time)";
    $result = $conn->query($query);
    return $result;
}

function returnFollowedFeed($followerId) {
    global $conn;
    $query = "  SELECT feed.user_id as author_id, feed.text, feed.timestamp FROM feed
                JOIN follows ON follows.followed_id = feed.user_id
                WHERE follows.follower_id = $followerId
                ORDER BY feed.timestamp DESC";
    $result = $conn->query($query);
    return $result;
}

function sendAMessage($who, $whom, $what) {
    global $conn;
    $time = time();
    $query = "  INSERT INTO messages (sender_id, recipient_id, text, timestamp)
                VALUES ($who, $whom, '$what', $time)";
    $result = $conn->query($query);
    return $result;
}

function returnMessages($whoId, $whomId) {
    global $conn;
    $query = "  SELECT * FROM messages
                WHERE (sender_id = $whoId AND recipient_id = $whomId) OR (sender_id = $whomId AND recipient_id = $whoId)
                ORDER BY timestamp ASC";
    $result = $conn->query($query);
    return $result;
}

function showMessages($who, $whom) {
    $result = returnMessages($who->id, $whom->id);
    while ( $row = mysqli_fetch_array($result) ) {
        //rozliseni sendera a recipienta
        if ($row['sender_id'] == $who->id) {
            $spec = "sender";
            $name = $who->fullname;
        } else {
            $spec = "recipient";
            $name = $whom->fullname;
        }
        echo "  <div class='message-modal $spec'>";
        echo        "<b>" . $name . ": </b>" . $row['text'];
        echo "  </div>";
    }
}

function showTime($timestamp) {
    $time = time();
    $past = $time - $timestamp;
    if ($past < 60) {
        $value = $past;
        if ($value == 1) {
            $unit = "second"; 
        } else {
            $unit = "seconds";
        }        
    } else if (60 <= $past && $past < 3600) {
        $value = floor($past/60);
        if ($value == 1) {
            $unit = "minute"; 
        } else {
            $unit = "minutes";
        } 
    } else if (3600 <= $past && $past < 86400) {
        $value = floor($past/3600);
        if ($value == 1) {
            $unit = "hour"; 
        } else {
            $unit = "hours";
        } 
    } else if (86400 <= $past && $past < 604800) {
        $value = floor($past/86400);
        if ($value == 1) {
            $unit = "day"; 
        } else {
            $unit = "days";
        } 
    } else if (604800 <= $past) {
        $value = floor($past/604800);
        if ($value == 1) {
            $unit = "week"; 
        } else {
            $unit = "weeks";
        } 
    }
    return $value . " " . $unit;
}

function showSettings($user) {
    echo "  <form>
                <input type='text' placeholder='Name' class='w3-input vertical-margin-small' name='name' value='$user->name' required>
                <input type='text' placeholder='Surname' class='w3-input vertical-margin-small' name='surname' value='$user->surname' required>
                <input type='email' placeholder='Email' class='w3-input vertical-margin-small' name='email' value='$user->email' required>
                <input type='text' placeholder='Profile picture (URL)' class='w3-input vertical-margin-small' value='$user->image' name='image'>
                <div class='colors vertical-margin-small'>
                    <p class='w3-text-gray'>Choose your favorite color:</p>
                    <input type='radio' id='red' name='color' value='red' checked>
                    <label for='red'><span class='w3-red'></span></label>

                    <input type='radio' id='pink' name='color' value='pink'>
                    <label for='pink'><span class='w3-pink'></span></label>  

                    <input type='radio' id='orange' name='color' value='orange'>
                    <label for='orange'><span class='w3-orange'></span></label>

                    <input type='radio' id='green' name='color' value='green'>
                    <label for='green'><span class='w3-green'></span></label>

                    <input type='radio' id='teal' name='color' value='teal'>
                    <label for='teal'><span class='w3-teal'></span></label>

                    <input type='radio' id='cyan' name='color' value='cyan'>
                    <label for='cyan'><span class='w3-cyan'></span></label>

                    <input type='radio' id='blue' name='color' value='blue'>
                    <label for='blue'><span class='w3-blue'></span></label>

                    <input type='radio' id='indigo' name='color' value='indigo'>
                    <label for='indigo'><span class='w3-indigo'></span></label>

                    <input type='radio' id='black' name='color' value='black'>
                    <label for='black'><span class='w3-black'></span></label>
                </div>

                <input type='submit' class='w3-input w3-indigo vertical-margin-small' value='Change settings!'>
                <input type='hidden' name='changeSettings' value='1'>
            </form>";
}

function changeSettings($get) {
    global $conn;
    $_SESSION['user']->name = $get['name'];
    $_SESSION['user']->surname = $get['surname'];
    $_SESSION['user']->fullname = $get['name'] . " " . $get['surname'];
    $_SESSION['user']->email = $get['email'];
    $_SESSION['user']->image = $get['image'];
    $_SESSION['user']->color = $get['color'];
    $id = $_SESSION['user']->id;
    $name = $get['name'];
    $surname = $get['surname'];
    $email = $get['email'];
    $image = $get['image'];
    $color = $get['color'];
    
    $query = "  UPDATE users SET name = '$name', surname = '$surname', email = '$email', profilepic = '$image', color = '$color'
                WHERE id = $id";
    
    $result = $conn->query($query);
    return $result;
}


class User {
    public $id;
    public $name;
    public $surname;
    public $fullname;
    public $email;
    public $image;
    public $color;
    public $timestamp;
    
    public function __construct($u) {
        $this->id = $u['id'];
        $this->name = $u['name'];
        $this->surname = $u['surname'];
        $this->fullname = $u['name'] . " " . $u['surname'];
        $this->email = $u['email'];
        $this->image = $u['profilepic'];
        $this->color = $u['color'];
        $this->timestamp = $u['timestamp'];
        
    }
    
    public function getUserById($id) {
        if ($this->id == $id) {
            return $this;
        } else {
            return false;
        }
    }
    
    public function returnIndividualFeed() {
        global $conn;
        $query = "  SELECT * FROM feed
                    WHERE user_id = $this->id
                    ORDER BY timestamp DESC";
        $result = $conn->query($query);
        return $result;
    }
    
    public function doIFollowHim($followed) {
        global $conn;
        $query = "  SELECT * FROM follows
                    WHERE follower_id = $this->id AND followed_id = $followed->id";
        $result = $conn->query($query);
        $rowcount = mysqli_num_rows($result);
        
        return $rowcount==1 ? true : false;
    }
}



?>