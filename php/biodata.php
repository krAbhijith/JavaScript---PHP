<!DOCTYPE html>
<html>
<head>
    <title>Biodata</title>
    <link rel="shortcut icon" href="fav.png" type="image/x-icon">
</head>
<body>

<h2>Biodata</h2>

<table class="form-table">
    <form method="post">
        <tr>
            <td><label for="name">Name:</label></td>
            <td><input type="text" id="name" name="name" required></td>
        </tr>
        <tr>
            <td><label for="address">Address:</label></td>
            <td><input type="text" id="address" name="address" required></td>
        </tr>
        <tr>
            <!-- <td><label for="city">City:</label></td> -->
            <td></td>
            <td><input type="text" id="city" name="city" required></td>
        </tr>
        <tr>
            <!-- <td><label for="pincode">Pincode:</label></td> -->
            <td></td>
            <td><input type="text" id="pincode" name="pincode" required pattern="[0-9]{6}" title="Enter a valid 6-digit pincode"></td>
        </tr>
        <tr>
            <td><label for="gender">Gender:</label></td>
            <td>
                <input type="radio" id="male" name="gender" value="Male" required>
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="Female">
                <label for="female">Female</label>
            </td>
        </tr>
        <tr>
            <td><label for="phone">Phone:</label></td>
            <td><input type="tel" id="phone" name="phone" required pattern="[0-9]{10}" title="Enter a valid 10-digit phone number"></td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input type="email" id="email" name="email" required></td>
        </tr>
        <tr>
            <td><label for="qualification">Qualification:</label></td>
            <td>
                <select id="qualification" name="qualification">
                    <option value="SSLC">SSLC</option>
                    <option value="PlusTwo">Plus Two</option>
                    <option value="UG">UG</option>
                    <option value="PG">PG</option>
                    <option value="Others">Others</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit"></td>
        </tr>
    </form>
</table>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<table border='1px'>";
    echo "<tr><td>Name</td><td>" . $_POST["name"] . "</td></tr>";
    echo "<tr><td>Address</td><td>" . $_POST["address"] . "</td></tr>";
    echo "<tr><td>City</td><td>" . $_POST["city"] . "</td></tr>";
    echo "<tr><td>Pincode</td><td>" . $_POST["pincode"] . "</td></tr>";
    echo "<tr><td>Gender</td><td>" . $_POST["gender"] . "</td></tr>";
    echo "<tr><td>Phone</td><td>" . $_POST["phone"] . "</td></tr>";
    echo "<tr><td>Email</td><td>" . $_POST["email"] . "</td></tr>";
    echo "<tr><td>Qualification</td><td>" . $_POST["qualification"] . "</td></tr>";
    echo "</table>";
}
?>

</body>
</html>
