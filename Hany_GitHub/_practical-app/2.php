<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

	<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		<article class="main-content col-xs-8">
		

<?php



		/* Step 1: Make 2 variables called number1 and number2 and set 1 to value 10 and the other 20:

		  Step 2: Add the two variables and display the sum with echo 	and cocatintate with "this is the result"


		  Step3: Make 2 Arrays with the same values, one regular and the other associative

		 
			 */
			$number1=10;
			$number2=20;
			$sum=$number1+$number2;
			echo $sum;

			$numbers1=array(10);
			$numbers2=array("second_number"=>20,"second_number_2"=>1);
			echo "<br>";
			//$sum2=$numbers1+$numbers2;
			echo $numbers2["second_number"];
			echo "<br>";
			echo $numbers2["second_number_2"];
		


		?>

	

		</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>