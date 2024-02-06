<!DOCTYPE html>
<html>
<head>
    <title>Armstrong</title>
    <link rel="shortcut icon" href="bitnami-mark.png">
</head>
<body>
    <h2>Enter a number</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter a number: <input type="text" name="number">
        <input type="submit" name="submit" value="Check">
    </form>

    <?php
    // Function to check if a number is an Armstrong number
    function isArmstrong($num) {
        $sum = 0;
        $temp = $num;
        $digits = strlen($num);
        
        while ($temp != 0) {
            $digit = $temp % 10;
            $sum += pow($digit, $digits);
            $temp = (int)($temp / 10);
        }
        
        if ($sum == $num) {
            return true;
        } else {
            return false;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        if (is_numeric($number) && $number >= 0) {
            if (isArmstrong($number)) {
                echo "Armstrong number";
            } else {
                echo "not an Armstrong number";
            }
        } else {
            echo "<p>Please enter a non-negative integer.</p>";
        }
    }
    ?>
</body>
</html>
