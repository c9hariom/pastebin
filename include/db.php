<?php

$db_name='frsiv_24886366_bin';
$user_name='frsiv_24886366';
$user_pass='singh1919@';
$db_host='sql209.freesite.vip';

$conn=mysqli_connect($db_host,$user_name,$user_pass,$db_name);

if (!$conn){
    die(mysqli_error($conn));
}

?>