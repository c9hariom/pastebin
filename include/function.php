<?php
global $conn;
function confirmQuery($result){
    if(!$result){
        die("MYSQLI_ERR ".mysqli_error($result));
    }
}

function users_online(){
    global $conn;
    $session=session_id();
    $time=time();
    $time_out_in_seconds=300;
    $time_out=$time-$time_out_in_seconds;

    $query="SELECT * FROM users_online WHERE session='{$session}'";
    $result=mysqli_query($conn,$query);
    $count=mysqli_num_rows($result);

    if($count == NULL){
        mysqli_query($conn,"INSERT INTO users_online (session,time) VALUES ('$session','$time')");
    }else{
        mysqli_query($conn,"UPDATE users_online SET time='$time' WHERE session='$session'");
    }
    
    $query=mysqli_query($conn,"SELECT * FROM users_online WHERE time >'$time_out'");
    return $users_online=mysqli_num_rows($query);
    
}

function total_users_visits(){
    global $conn;
    $query=mysqli_query($conn,"SELECT * FROM users_online");
    return $total_users_visits=mysqli_num_rows($query);
    
}


?>
