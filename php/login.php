<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
</head>
<body>


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>
    
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" value="Login">
</form>

</body>
</html>
<?php
// Database connection
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$database = "college";

$conn = mysqli_connect($servername, $username, $password, $database);
echo "successfully connected <br>";

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Query to fetch user from database
    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // // User found, redirect to dashboard or any other page
        // header("Location: dashboard.php");
        echo "<br> $username , you are logged in successfully";
    } else {
        // Invalid credentials, display error message
        echo "login denied";
    }
}

mysqli_close($conn);
?>
