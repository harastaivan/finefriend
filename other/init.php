<?php

include('other/connection.php');

function print_r2($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function selectAllUsers() {
    global $conn;
    $query = "SELECT * FROM users";
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
    
    public function doIFollowHim($followedId) {
        global $conn;
        $query = "  SELECT * FROM follows
                    WHERE follower_id = $this->id AND followed_id = $followedId->id";
        $result = $conn->query($query);
        $rowcount = mysqli_num_rows($result);
        
        return $rowcount==1 ? true : false;
    }
}



?>