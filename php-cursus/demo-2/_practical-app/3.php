<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
// step 1
    if (5 > 10){
        echo "da hoor nie";
    }elseif (6 > 10){
        echo "da hoor nog steeds nie";
    }else{
        echo "i love PHP<br><br>";
    }
    
// step 2

    for ($counter =0; $counter <= 10; $counter ++){
        echo $counter;
    }
    echo "<br><br>";

// step 3
 
$number = 34;
    
switch($number){
    case 39:
        echo "da hoor nie";
        break;
    case 38:
        echo "da hoor nie";
        break;
    case 37:
        echo "da hoor nie";
        break;
    case 36:
        echo "da hoor nie";
        break;
    case 35:
        echo "da hoor nie";
        break;
    case 34:
        echo "lkkah";
        break;
}
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP
    


	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>