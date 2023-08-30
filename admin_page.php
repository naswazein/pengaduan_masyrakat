<?php
session_start();
if(!isset($_SESSION)){header('Location:login.php');}
if($_SESSION['level']=='masyarakat'){header('Location:home.php');}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin page</title>
    <link rel="stylesheet" href="style3.css">

</head>
<body>
    
<div class="container">

<div class="content">
    <h3>hi, <span>admin</span></h3>
    <h1>welcome <span></span></h1>
    <p>this is an admin page</p>

</div>
</div>

</body>
</html>