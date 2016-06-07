<?php include "db.php";?>
<?php
    
//functie om aan te roepen.. waar beide functies inzitten
function showAllData(){ 

//query + connection
global $connection; //alles in function is local.. dit is nodig om het global te maken
$query = "SELECT * FROM users"; //haalt alles op
$result = mysqli_query($connection, $query); // connect en haalt alles op
    
    if(!$result){
        die('Query FAILED' . mysqli_error());
    }  

// fetch row id from db and show as option
        while($row = mysqli_fetch_assoc($result)){
            $id = $row['id'];
        echo "<option value='$id'>$id</option>"; 
            
        }
}

function UpdateTable(){
    global $connection;

   $username = $_POST['username'];
   $password = $_POST['password'];
    // ' mag nu gebruikt worden in naam.. beveiligt tegen mensen die commands willen intikken in je input
$username = mysqli_real_escape_string($connection ,$username);
$password = mysqli_real_escape_string($connection, $password);
    
   $id = $_POST['id'];

    // hashFormat geeft aan wat voor soort beveiliging en salt is een string van 22 caracters om alles te incripten met crypt functie
    // password word nu zeer groot gemaakt database moet dan ook staan op grote input grote met password
$hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";

    $hasF_and_salt = $hashFormat . $salt;
    
$password = crypt ($password, $hasF_and_salt)
    
$query = "UPDATE users
          SET username = '$username', password ='$password' 
          WHERE id = $id ";


$result = mysqli_query($connection, $query);
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}

function deleteRows(){
    global $connection;

   $username = $_POST['username'];
   $password = $_POST['password'];
   $id = $_POST['id'];
    
$query = "DELETE FROM users
          WHERE id = $id ";


$result = mysqli_query($connection, $query);
    if(!$result){
        die("QUERY FAILED" . mysqli_error($connection));
    }
}
?>