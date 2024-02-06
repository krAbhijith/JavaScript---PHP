<!DOCTYPE html>
<html>
<head>
    <title>Numbers</title>
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
</head>
<body>

<form method="post">
    <label for="number">Enter the number:</label><br>
    <input type="number" id="number" name="number" required><br><br>
    <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_number = $_POST["number"];
    $sum_of_divisors = 0;

    for ($i = 1; $i <= $input_number / 2; $i++) {
        if ($input_number % $i == 0) {
            $sum_of_divisors += $i;
        }
    }

    if ($sum_of_divisors == $input_number) {
        echo "<p>perfect number</p>";
    } elseif ($sum_of_divisors < $input_number) {
        echo "<p>deficient number</p>";
    } else {
        echo "<p>abundant number</p>";
    }
}
?>

</body>
</html>
