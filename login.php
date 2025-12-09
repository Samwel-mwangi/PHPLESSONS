 <?php 
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $connection = mysqli_connect('localhost','root','','loginapp');

    if($connection){
        echo "We are connected<br>";
    } else {
        die("Database connection failed");
    }

    // Insert query
    $query = "INSERT INTO users(username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);

    if(!$result){
        die("Query failed: " . mysqli_error($connection));
    } else {
        echo "User created successfully!";
    }

    mysqli_close($connection);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login_create.php" method="post">
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
