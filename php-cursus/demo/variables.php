<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php    
 
$name = 'Michel';  // <- String
$number = 100; // <- Int
$Number_List = 200.5; //<- Double
$NUMBER = "300"; //<- String
    
echo $name;
echo $number;
echo $Number_List;
echo $NUMBER;
    
echo $name . " " . $Number_List; //<- samen met spatie ertussen

    // kan alles van variable maken zelfs img.. maar er is een limiet van 1
$name = "<h1> Hello </h1>"; //<- verander naam

echo $name;
?>  
    
</body>
</html>