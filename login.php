<?php
global $conn;
$conn = mysqli_connect("localhost", "root", "Fk!i=a0@:K", "reader3") or die('Error connecting to mysql');
mysqli_query($conn, "SET NAMES utf8");
mysqli_query($conn, "SET CHARACTER SET utf8");
$sql = "SELECT user_id FROM users WHERE user_email='".$_GET['user_email']."' AND pass_word=md5('".$_GET['pass_word']."')";
$query = mysqli_query($conn, $sql) OR die("cannot log in from php. something error");
$numrows = mysqli_num_rows($query);

header('Access-Control-Allow-Origin: *');

if($numrows == 0){
 exit("fail login");
}
list($userid) = mysqli_fetch_row($query);



echo $userid;