 <?php 
 
//  }
$connection = mysqli_connect('localhost','root','','loginapp');
if($connection){
    echo "We are connected";
}else {
    die ("Database connection failed");
}

$query = "SELECT * FROM users ";
 
$result = mysqli_query($connection, $query);

if(!$result){
    die('Query failed');
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
            <?php 
            while($row = mysqli_fetch_assoc($result)){
                
                print_r($row);
            }
            
            
            
            ?>
    </div>
</body>
</html>