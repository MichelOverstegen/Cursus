<?php 

if(isset($_POST['submit'])){
    
$username = $_POST['username'];
$password = $_POST['password'];

// ' mag nu gebruikt worden in naam.. beveiligt tegen mensen die commands willen intikken in je input
$username = mysqli_real_escape_string($connection ,$username);
$password = mysqli_real_escape_string($connection, $password);
    
$connection = mysqli_connect('localhost', 'root', '','loginapp');
    if($connection){
    echo "We are connected";
    } else {
    die("Database connection failed");
    }

    $query = "INSERT INTO users(username, password)";
        // door de punt plakt hij ze aan elkaar v^
    $query .= "VALUES ('$username', '$password')";
    
   $result = mysqli_query($connection, $query);
    
    if(!$result){
        die('Query FAILED' . mysqli_error());
    }else {
        echo " Lkkah";
    }

}
    
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
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