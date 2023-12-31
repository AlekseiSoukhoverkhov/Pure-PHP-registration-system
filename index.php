<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authorisation and registration</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

    <!-- Authorisation form -->

    <form action="vendor/signin.php" method="post">
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter your login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        <button  type="submit">Enter</button>
        <p>
            If you don't have an account please <a href = "/register.php">register</a>!
        </p>

        <?php
        if($_SESSION['message']) {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>

    </form>

</body>
</html>
