<?php 
include "db.php"; 
include "functions.php";
if(isset($_POST['submit'])){
    UpdateTable();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <div class="col-sm-6">
           <form method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control">
                </div>

                 <div class="form-group">
                     <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <select name="id" id="">
         <?php

showAllData();
?>
                      
                    </select>
                </div>
                <input class="btn btn-primary" type="submit" name="submit" value="Update">
            </form>
    </div>
</body>
</html>