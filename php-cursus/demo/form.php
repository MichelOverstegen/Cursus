<?php 
if (isset($_POST['submit'])){
    
$username = $_POST['name'];
$password = $_POST['password'];

$minimum =5;
$maximum =10;

$name = array("michel", "bob", "henk", "Bas", "freek", "TBeest", "Tom");

if(!in_array($username, $name)){
    echo "sorry your username is not in the database";
}   
else{
    echo "Ewa " . "<br>";
}

if(strlen($username) < $minimum ||strlen($username) > $maximum){
    echo "Your username has to be between the 5 and 10 characters";
}
    else{
       echo "Hello " . $username . "<br>";
       echo "Your password is " . $password; 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<form action="form.php" method="post">
        <input type="text" name="name" placeholder="Enter Username"><br>
        <input type="password" name="password" placeholder="Enter Password" ><br><br>
    <input type="submit" name="submit">
</form>  
    
</body>
</html>