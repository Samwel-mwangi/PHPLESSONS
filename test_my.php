<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if($connection){
    echo "MySQLi is working!";
}else{
    echo "Connection failed: " . mysqli_connect_error();
}
