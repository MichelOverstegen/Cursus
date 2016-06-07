<?php 
if (isset($_POST['submit'])){
    
$username = $_POST['name'];
$password = $_POST['password'];

$minimum =5;
$maximum =10;

$name = array("michel", "bob", "henk", "Bas", "freek", "TBeest", "Tom");

if(!in_array($username, $name)){
    echo "sorry your username is not in the database". "<br>";
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