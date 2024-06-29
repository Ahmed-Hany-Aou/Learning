<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  
			class dogs{
				var $eyes_color='black';
				var $nose_size="2cm";
				var $fur_color='brwon';
				var $no_of_legs=4;
			

			function show_All(){
				echo 'your dog description is: ';
				echo 'Eyes Color: ' . $this->eyes_color . ', ';
				echo 'Nose Size: ' . $this->nose_size . ', ';
				echo 'Fur Color: ' . $this->fur_color . ', ';
				echo 'Number of Legs: ' . $this->no_of_legs . '.';
			}
		}

			$pitbull=new dogs();
			$pitbull->show_All();
	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

Step 6: Call the method ShowAll

	

		
	*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>