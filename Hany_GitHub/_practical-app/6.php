
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 
<form action="http://localhost/dashboard/demo/_practical-app/6.php" method="post">
    <label for="name">Your name:</label>
    <input name="name" id="name" type="text">

    <label for="age">Your age:</label>
    <input name="age" id="age" type="number">

    <button type="submit" name="submit">Submit</button>
</form>
	<?php  
	/*  Step1: Make a form that submits one value to POST super global


 */
	
if(isset($_POST['submit'])){

$names=array("hany","boshra","ahmed","adhm","tarek");
$name=$_POST['name'];
if (in_array( $name,$names)){
	echo "welcome $name";
	//echo 'welcome '.$name;
}

elseif (!in_array( $name,$names))
{
	echo 'not  available';
}

}
/*
else if ( in_array != ($name, $names))
{
	echo 'not avialbles';
}
*/
	
	
	
	


	
?>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>