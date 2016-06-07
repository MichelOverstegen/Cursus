<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php 
  
    //functie beschrijven
  function say_Something(){
      
      echo "Hello Michel <br>";
      
  }

    //functie uitvoeren
say_Something();

    //functie in functie
    function calculate(){
        
        echo 456 + 345 . "<br>";
        
        say_Something();
        
    }

calculate();
    
?>    
    
</body>
</html>