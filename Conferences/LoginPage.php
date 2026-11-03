<?php
session_start();

?>

<!DOCTYPE html>
<html>

<?php include('templates/header.php') ?>

<h2>
    Login Page
</h2>
<a href="HomePage.php">To Home Page</a>
<form action='LoginPage.php' method='POST'>
    username:<br>
    <input type="text" name="username"><br>
    password:<br>
    <input type="password" name="password"><br>
    <input type="submit" name="login" value="login">

</form>

</body>

</html>

<?php

if (isset($_POST['login'])) {

    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = password_hash($_POST["password"], PASSWORD_DEFAULT);

        echo $_SESSION["username"] . "<br>";
        echo $_SESSION["password"] . "<br>";

        header("Location: HomePage.php");
    } else {
        echo "Missing password/username. <br>";
    }
}

?>