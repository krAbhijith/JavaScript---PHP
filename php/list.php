<!DOCTYPE html>
<html>
<head>
    <title>Fruits</title>
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
</head>
<body>

<h3>choose your favorite fruits</h3>
<form method="post">
    <label for="fruits">Select fruits:</label><br>
    <select id="fruits" name="fruits[]" multiple>
        <option value="">........</option>
        <option value="Grape">Grape</option>
        <option value="banana">banana</option>
        <option value="chikku">chikku</option>
        <option value="Apple">Apple</option>
    </select><br><br>
    <input type="submit" value="Select">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fruits"])) {
    $selected_fruits = $_POST["fruits"];
    if (empty($selected_fruits)) {
        echo "No fruits selected.";
    } else {
        echo "<h2>you have indicated that you like </h2>";
        foreach ($selected_fruits as $fruit) {
            echo "$fruit<br>";
        }
    }
}
?>

</body>
</html>
