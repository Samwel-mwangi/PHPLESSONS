<?php
include "db.php";
function createRows(){
    global $connection;
    if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) || empty($password)) {
        echo "Fields can't be blank";
        exit;
    }

    // Database connection
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    } else {
        echo "We are connected<br>";
    }

    // Optional: hash the password for security
    //$password = password_hash($password, PASSWORD_BCRYPT);

    // Insert query (use prepared statements to prevent SQL injection)
    $stmt = mysqli_prepare($connection, "INSERT INTO users(username, password) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);

    if (mysqli_stmt_execute($stmt)) {
        echo "User created successfully!";
    } else {
        die("Query failed: " . mysqli_error($connection));
    }

    mysqli_stmt_close($stmt);
    mysqli_close($connection);
}
}
function showAllData(){
    global $connection;
    $query = "SELECT * FROM users";
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

    $query = "UPDATE users SET username = '$username', password = '$password' WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("QUERY FAILED: " . mysqli_error($connection));
    } else {
        echo "Record updated!";
    }
}

function deleteRows(){
    global $connection;
    $id = $_POST['id'];

    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("QUERY FAILED: " . mysqli_error($connection));
    } else {
        echo "Record Deleted!";
    }
}
