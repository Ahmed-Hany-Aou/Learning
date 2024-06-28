<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  


	if(1>2){
		echo "1 is greater than 2";

	} elseif (1>=2){
		echo "1 is greater than or equal to 2";
	}
	else{
		echo "i love php";
		echo "<br>";
	}
	//////////////////////////

	for($i=1; $i<=10;){
		echo $i;
		echo "<br>";
		$i++;
	}

	$test=5;
	switch ($test){
		case 5: 
			echo "test is 5";
		break;
		
		case 4:
			echo "test is 4";
			break;
			case 3:
				echo "test is 3";
				break;
				default:
				echo "test is not avialble";
				break;
	}
/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>