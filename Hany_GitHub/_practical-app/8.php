<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  
		$pass='Ahmed@1973';
		$hashFormat="$2y$10$";//Bcrypt Format:
		$salt="ilovetouseveryhardpass";// should be 22 chracter (because of the format of hash we choosed)
		$hash_and_salt=$hashFormat.$salt;
		$pass_sys= crypt($pass,$hash_and_salt);
	
		echo $pass_sys;
	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>