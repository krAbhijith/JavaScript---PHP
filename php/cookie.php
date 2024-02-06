<!DOCTYPE html>
<html>
<head>
    <title>visit</title>
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
</head>
<body>
<h4>Last Visited time on the webpage</h4>
<?php
// Set the cookie with the current date and time
$last_visited = isset($_COOKIE['last_visited']) ? $_COOKIE['last_visited'] : "you have not visited the site";
setcookie('last_visited', date('Y-m-d H:i:s'), time() + (60 * 60 * 24 * 30)); // Cookie will expire in 30 days

echo "your last visit was- $last_visited";
?>

</body>
</html>
