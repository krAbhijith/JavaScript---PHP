<!DOCTYPE html>
<html>
    <head>
        <title>Array Operations</title>
        <link rel="shortcut icon" href="fav.png" type="image/x-icon">
    </head>
    <body>
        <h2>Enter 10 names:</h2>
        
        <form method="post">
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <label for="name<?= $i ?>">Name <?= $i ?>:</label>
                <input type="text" id="name<?= $i ?>" name="name<?= $i ?>"><br>
            <?php endfor; ?>
            <br>
            <input type="submit" value="Submit">
        </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Step 1: Create an array of names from the form input
    $names = array();
    for ($i = 1; $i <= 10; $i++) {
        if (!empty($_POST["name$i"])) {
            $names[] = $_POST["name$i"];
        }
    }

    // Step 1: Display content using foreach
    echo "a.Content using foreach:<br>";
    foreach ($names as $name) {
        echo $name . "<br>";
    }

    // Step 2: Display array in sorted order
    sort($names);
    echo "b.Array in sorted order:<br>";
    foreach ($names as $name) {
        echo $name . "<br>";
    }

    // Step 3: Display array without duplicate elements
    $unique_names = array_unique($names);
    echo "c.Array without duplicate elements:<br>";
    foreach ($names as $name) {
        echo $name . "<br>";
    }

    // Step 4: Remove last element and display
    array_pop($names);
    echo "d.Array after removing last element:<br>";
    foreach ($names as $name) {
        echo $name . "<br>";
    }

    // Step 5: Display in reverse order
    $reverse_names = array_reverse($names);
    echo "e.Array in reverse order:<br>";
    foreach ($reverse_names as $name) {
        echo $name . "<br>";
    }

    // Step 6: Search an element in the array
    echo "f.search element in array:<br>";
    $search_name = "anu"; // Change this to the name you want to search
    if (in_array($search_name, $names)) {
        echo "$search_name found in the array.";
    } else {
        echo "$search_name not found in the array.";
    }
}
?>


</body>
</html>
