<?php
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-sm-6">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>
    </div>
</div>
</body>
</html>
