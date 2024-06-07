<?php

@include 'config.php';

session_start();
if(!isset($_SESSION['admin_name'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="content">
        <h3>Hi, <span>Admin</span></h3>
        <h1>welcome <span><?php echo $_SESSION['admin_name']?></span></h1>
        <p>this is an admin page</p>
        <a href="logout.php" class="btn">logout</a>

    </div>
</div>
    
</body>
</html>