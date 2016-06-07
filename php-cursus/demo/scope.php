<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php 
  
$x = "outside"; // global scope
    
    function convert(){
     global $x;  // declaring the variable global   
     $x = "inside";   // local
        
    }
    
    echo $x;
    echo "<br>";
    
convert();
    
    echo $x;
?>    
    
</body>
</html>