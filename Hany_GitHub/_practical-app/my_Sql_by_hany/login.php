<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="post">
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
    </div>
</div>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Establish connection to the database
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');    
    
    if ($connection) {
        echo "We are connected<br>";
        
        // Insert user data into the database
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($connection, $query);

        if (!$result) {
            // If the query fails, show an error message
            die('Query failed: ' . mysqli_error($connection));
        } else {
            echo "User registered successfully<br>";
        }

        // Retrieve all users from the database
        $select_query = "SELECT * FROM users";
        $result = mysqli_query($connection, $select_query);

        if (!$result) {
            // If the query fails, show an error message
            die('Query failed: ' . mysqli_error($connection));
        } else {
            // Fetch and print each row from the result set
            while ($row = mysqli_fetch_assoc($result)) {
                print_r($row);
                echo "<br>";
            }
        }
    } else {
        // If the database connection fails, show an error message
        die("Database connection failed");
    }
}
?>
