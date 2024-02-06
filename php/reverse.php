<!DOCTYPE html>
<html>
<head>
    <title>String Reverse</title>
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
</head>
<body>

<form method="post">
    <label for="string">Enter a string:</label><br>
    <input type="text" id="string" name="string" required>
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_string = $_POST["string"];
    $reversed_string = strrev($input_string);
    echo "<p>$reversed_string</p>";
}
?>

</body>
</html>
