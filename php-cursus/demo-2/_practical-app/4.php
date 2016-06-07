<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


		
	<?php  
    
    //step1
    function step1(){
        
        $sum = 34 + 46;
            return $sum;
        
    }
    
$uitkomst = step1();
    echo $uitkomst;
    echo "<br>";
    
    //step2

function step2($number1, $number2){
    
    echo $number1 + $number2;
    
}
    
    step2 (34, 46);

/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>