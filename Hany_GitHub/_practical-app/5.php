<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 



		$number=105.7;
		$number=floor($number);
		echo $number.' this comes from math.floor '. '<br>';
	
		$number=105.1;
		$number=round($number);
		echo $number.' this comes from math.round '. '<br>';

		$number=105.1;
		$number=ceil($number);
		echo $number.' this comes from math.ceil '. '<br>';
		/////////////////////////////////////////////////////////////


		$name='Ahmed hany boshra @123456  ';
		$result=strlen($name);
		echo $result.' this is the length of the string '. '<br>';

		$result_2=strtoupper($name);
		echo $result_2. ' vs '.$name;

		///////////////////////////////////////

		$list=['ahmed','hany','boshra',1,2];
		print_r($list);

/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>