<<<<<<< HEAD
<?php include "db.php";
function showAllData(){
    global $connection;
$query = "SELECT * FROM users ";
 
$result = mysqli_query($connection, $query);

if(!$result){
    die('Query failed');
}
while($row = mysqli_fetch_assoc($result)){
 $id = $row['id'];
   echo "<option value='$id'>$id</option>";


}
}

function UpdateTable(){
global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("QUERY FAILED: " . mysqli_error($connection));
    } else {
        echo "Record updated!";
    }
}


function deleteRows(){
global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("QUERY FAILED: " . mysqli_error($connection));
    } else {
        echo "Record Deleted!";
    }
}


=======
<?php include "db.php";
function showAllData(){
    global $connection;
$query = "SELECT * FROM users ";
 
$result = mysqli_query($connection, $query);

if(!$result){
    die('Query failed');
}
while($row = mysqli_fetch_assoc($result)){
 $id = $row['id'];
   echo "<option value='$id'>$id</option>";


}
}

function UpdateTable(){
global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("QUERY FAILED: " . mysqli_error($connection));
    } else {
        echo "Record updated!";
    }
}


function deleteRows(){
global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result){
        die("QUERY FAILED: " . mysqli_error($connection));
    } else {
        echo "Record Deleted!";
    }
}


>>>>>>> f0bee98c86cd7a0c9543a786fbe23e1c8d9576d7
?>