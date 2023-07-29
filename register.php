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
    <title>Registration Form</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<!-- Registration form -->

<form action="vendor/signup.php" method="post" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text" name="full_name" placeholder="Enter your full name">
    <label>Login</label>
    <input type="text" name="login" placeholder="Enter your login">
    <label>Email</label>
    <input type="email" name="email" placeholder="Enter your email">
    <label>Your avatar</label>
    <input type="file" name="avatar">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter your password">
    <label>Confirm your password</label>
    <input type="password" name="password_confirm" placeholder="Re-enter your password">
    <button type="submit">Enter</button>
 
   <p>
        Do you already have an account? Please <a href="/">login</a>!
    </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>

</form>

</body>
</html>
