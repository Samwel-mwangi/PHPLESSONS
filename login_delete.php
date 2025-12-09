<?php 
include "db.php"; 
include "functions.php";

if(isset($_POST['submit'])){
   deleteRows();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center">Delete User</h1>
           <form action="login_delete.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                <div class="form-group">
                     <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="id">Select User ID</label>
                    <select name="id" id="" class="form-control">
                        <?php showAllData(); ?>
                    </select>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Delete">
            </form>
        </div>
    </div>
</body>
</html>
