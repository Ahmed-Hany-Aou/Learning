<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
	<?php 

	/*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	if (isset($_GET['name'])) {
		$name = htmlspecialchars($_GET['name']);
		echo "Hello, " . $name . "!<br>";
	} else {
		echo '<a href="?name=JohnDoe">Click Here</a><br>';
	}
	
	// Step 2: Set a cookie that expires in one week
	$cookie_name = "user";
	$cookie_value = "JohnDoe";
	$cookie_expiration = time() + (7 * 24 * 60 * 60); // 7 days from now
	setcookie($cookie_name, $cookie_value, $cookie_expiration);
	
	if (isset($_COOKIE[$cookie_name])) {
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value: " . $_COOKIE[$cookie_name] . "<br>";
	} else {
		echo "Cookie is not set!<br>";
	}
	
	// Step 3: Start a session and set it to a value
	session_start();
	$_SESSION['user_id'] = 42;
	
	if (isset($_SESSION['user_id'])) {
		echo "Session 'user_id' is set!<br>";
		echo "Value: " . $_SESSION['user_id'] . "<br>";
	} else {
		echo "Session is not set!<br>";
	}
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>