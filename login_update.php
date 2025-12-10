<?php 
include "db.php"; 
include "functions.php";
include "includes/header.php";

if(isset($_POST['submit'])){
    UpdateTable();
}
?>

 
    <div class="container">
        <div class="col-sm-6">
            <h1 class="text-center" >Update</h1>
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
                    <label for="id">Select User ID</label>
                    <select name="id" id="" class="form-control">
                        <?php showAllData(); ?>
                    </select>
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Update">
            </form>
        </div>
 <?php include "includes/footer.php"?>