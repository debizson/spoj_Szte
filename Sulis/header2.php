
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<header>
    <div>Star Wars Fun Blog - <?php echo $name; ?></div>
</header>
<div id="content">
    <nav>
        <ul>
            <li><a href="index2.php">Főoldal</a></li>
            <li><a href="index.php">Vissza</a></li>
            <li style="color: #ff0099"><?php echo $_SESSION['statusz'] ?></li>
        </ul>
        <div class="clearfix"></div>
    </nav>