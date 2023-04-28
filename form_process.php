<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php 


if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $name = array("Edwin", "Student", "Peter", "Samid", "Mohad", "Maria", "Jane", "Tom");
    $minimum = 5;
    $maximum = 10;

    // echo "Hello " . $password;
    // echo "Your password is " . $username;

    if (strlen($username) < $minimum) {
        echo "Username has to be longer than 5";
    }

    if (strlen($username) > $maximum) {
        echo "Username has to be less than 10";
    }

    if (!in_array($username, $name)) {
        echo "Sorry you are not allowed";
    } else {
        echo "Welcome";
    }
}

?>

<form action="form_process.php" method="post">
    <input type="text" name="username" placeholder="Enter username">
    <input type="password" name="password" placeholder="Enter password"><br>
    <input type="submit" name="submit">


</form>


</body>
</html>