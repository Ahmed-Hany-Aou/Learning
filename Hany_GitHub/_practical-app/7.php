<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
    

<section class="content">

    <aside class="col-xs-4">
        <?php Navigation(); ?>
    </aside><!--SIDEBAR-->

    <article class="main-content col-xs-8">
 
        
        <!-- Form to submit username and password -->
        <form action="http://localhost/dashboard/demo/_practical-app/7.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="Submit">
        </form>

        <?php  
		echo "Hi, try 3 I come from GitHub";
        echo "<br>";
        echo "I came from staging branch_new try";
        // Step 1: Create a connection
        // Step 1 - Create a database in PHPmyadmin
        // Step 2 - Create a table like the one from the lecture
        // Step 3 - Insert some Data
        // Step 4 - Connect to Database and read data
            
            // Establish connection to the database
            $connection = mysqli_connect('localhost', 'root', '', 'customers');    
          
            if ($connection) {
                echo "We are connected<br>";
                
             
            } else {
                // If the database connection fails, show an error message
                echo "We are not connected: " . mysqli_error($connection);
            }
			 // Retrieve all users from the database
			 $select_query = "SELECT * FROM customers_info";
			 $result = mysqli_query($connection, $select_query);
			 if (!$result) {
				// If the query fails, show an error message
				die('Query failed: ' . mysqli_error($connection));
			} else {
				// Fetch and print each row from the result set as an associative array
				while ($row = mysqli_fetch_assoc($result)) {
					echo "ID: " . $row['id'] . "<br>";
					echo "Username: " . $row['username'] . "<br>";
					echo "Password: " . $row['password'] . "<br>";
					echo "<hr>";
				}
			}
		
	
        
        ?>

    </article><!--MAIN CONTENT-->

</section>

<?php include "includes/footer.php"; ?>
