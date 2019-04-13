<?php
$server = "localhost";
$username = "id5489118_asricat";
$password = "123ASRIANOR123";
$db_name = "id5489118_asricatdb";

$conn = mysqli_connect($server, $username, $password, $db_name);

if(mysqli_connect_errno())
{
    echo "Failed to connect to Mysql : " . mysqli_connect_error();
    
}
?>