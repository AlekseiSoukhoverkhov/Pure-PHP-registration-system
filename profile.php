<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /');
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

<form>
    <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
    <h2><?= $_SESSION['user']['full_name'] ?></h2>
    <a href="#"><?= $_SESSION['user']['email'] ?></a>
    <a href="vendor/logout.php" class="logout">Logout</a>
</form>

</body>
</html>
