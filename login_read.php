 <?php 
 include "includes/header.php";
 include "db.php";
 include "functions.php";

 

?>

 
    <div class="container">
        <div class="col-sm-6">
            <pre>
            <?php 
            readRows();
            ?>
            </pre>
        </div>
  <?php include "includes/footer.php"?>
