<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php 

    //function met parameter
function greeting ($message){
    
  echo $message;  
    
}    

    //funtie met meegegeven parameter
greeting("Hello Michel");    

    
//enter
echo "<br>";
 
    
    //rekenfunctie met dubbele parameter
function calculate($number1, $number2){
    $sum = $number1 + $number2;
    
    echo $sum;
    
}

    //funtie met meegegeven dubbele parameter
calculate(48, 48);
    
?>    
    
</body>
</html>