<!DOCTYPE html>
<?php
include_once 'db.php';
include_once 'user.php';

session_start();

$logged_in = false;
if (isset($_SESSION['user'])) {
    $logged_in = true;
    $user = unserialize($_SESSION['user']);
}


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php 
if ($logged_in):
?>
<p>
    hello <?= $user->email; ?>
</p>
<?php
else: 
?>
<p>
    <a href="login.php">Log In</a>
</p>
<p>
    <a href="sign-up.php">Sign up for an account</a>
</p>
<?php endif ?>

</body>
</html>