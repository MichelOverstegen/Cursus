<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    
<?php 
$connection = mysqli_connect('localhost','root','','test 7');
    if(!$connection){
        die("Database Connection Failed") . mysqli_error($connection);
    }else{ 
        echo "we are connected";
    }

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if(!$result){
    die("query failed");
}

if(isset ($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

$query1 = "ADD TO users "
}
?>
	<section class="content">
        
        <?php 
        while($record = mysqli_fetch_assoc($result)){
            echo $records['user']
        }
        ?>

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
<div id="inputfield">
<form action="7.php" method="post"></form> 
<ul>
    <lable>Username</lable>
    <input type="text" name="username">
</ul>   
<ul>
    <lable>Password</lable>
    <input type="password" name="password">
</ul> 
<ul>
    <input type="submit" name="submit">
</ul> 

</div>
	<?php  

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
