<?php
include "db.php";
include "functions.php";
include "includes/header.php";

createRows();
?>


<div class="container">
    <div class="col-sm-6">
        <h1 class="textcenter">Create</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Create">
        </form>
    </div>
<?php include "includes/footer.php"?>
