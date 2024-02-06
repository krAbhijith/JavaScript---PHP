<!DOCTYPE html>
<html>
<head>
    <title>Student Information</title>
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
</head>
<body>

<h2><center>Marksheet</center></h2>

<form method="post">
    <label for="roll_no">regno:</label>
    <input type="text" id="roll_no" name="roll_no" required><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $servername = "localhost";
    $username = "root"; // Default username for XAMPP
    $password = ""; // Default password for XAMPP
    $database = "college";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Retrieve data from the database based on roll number
    $roll_no = $_POST["roll_no"];
    $sql = "SELECT * FROM std WHERE rollno='$roll_no'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Display student information if found
        $row = mysqli_fetch_assoc($result);
        echo "successfully connected <br>";
        echo "rollno: " . $row['rollno'] ."<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Marks: " . $row['mark'] . "<br>";
        echo "Grade: " . $row['grade'] . "<br>";
    } else {
        // Display error message if student not found
        echo "Student with roll number $roll_no not found.";
    }

    mysqli_close($conn);
}
?>

</body>
</html>
