<<<<<<< HEAD
<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if($connection){
    echo "MySQLi is working!";
}else{
    echo "Connection failed: " . mysqli_connect_error();
}
=======
<?php
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');

if($connection){
    echo "MySQLi is working!";
}else{
    echo "Connection failed: " . mysqli_connect_error();
}
>>>>>>> f0bee98c86cd7a0c9543a786fbe23e1c8d9576d7
