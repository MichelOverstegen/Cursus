<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 

//step1
    $nummer = 4.6;
    echo round($nummer);
    echo "<br>";
//step2
    $menaam = "bassi";
    echo strlen($menaam);
    echo "<br>";
//step3
    $list = [1,2,3,4,5];
    echo max($list);
    
    
/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>