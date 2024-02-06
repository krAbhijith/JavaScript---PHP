<!DOCTYPE html>
<html>
<head>
    <title>Fibonacci series</title>
    <link rel="shortcut icon" href="bitnami-mark.png">
</head>
<body>
    <h2>Enter the limit:</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="limit" required>
        <input type="submit">
    </form>
    <br>
    <?php
    // Function to generate Fibonacci sequence up to a given limit
    function generateFibonacci($limit) {
        $fibonacci = array();
        $fibonacci[0] = 0;
        $fibonacci[1] = 1;
        
        echo $fibonacci[0] . ", " . $fibonacci[1] . ", ";
        
        $i = 2;
        while ($fibonacci[$i - 1] + $fibonacci[$i - 2] <= $limit) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
            echo $fibonacci[$i] . ", ";
            $i++;
        }
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $limit = $_POST["limit"];
        generateFibonacci($limit);
    }
    ?>
</body>
</html>
