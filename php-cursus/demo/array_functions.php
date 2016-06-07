<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
<?php 
  // alle ingebouwde functies staan op php.net
    
$list = [343,34,323,23,54,232,453];
    // max = hoogste getal in de arraylist
    echo max($list);
    
    echo "<br>";
    // min = laagste getal in de arraylist
    echo min($list);
    
    echo "<br>";
    
    // alles laten zien
    print_r($list);
    
    echo "<br>";
    // sorteert de lijst van laag naar hoog
    sort($list);
   
    print_r($list);
    
    
?>    
    
</body>
</html>