<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
		
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php  

	function cal(){
		$sum = 5 + 6;
		echo $sum;
		return $sum;
		//echo $sum;
	}
	

		cal();
		echo '<br>';
		function cal_2($number1,$number2){
			$sum = $number1 + $number2;
			echo $sum;
			return $sum;
		}

		cal_2(10,25);
		echo '<br>';
		print ('hi there');
		echo '<br>';
		echo ('i am from echo');
		echo '<br>';
		$result=print('i came from second print');
		echo '<br>';
		echo $result;
		
		////echo $sum;
/*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

	
?>





</article><!--MAIN CONTENT-->


<?php include "includes/footer.php"; ?>