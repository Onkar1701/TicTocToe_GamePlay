<?php
    $server = "localhost";
    $username = "root";
    $password = "Krishna17012002@";

    $con = mysqli_connect($server,$username,$password);

    if(!$con){
        die("connecting to this datavase failed due to" . mysqli_connect_error());
    }

    $position=$_POST['position'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql = "INSERT INTO `show` (`position`, `name`, `email`, `password`) VALUES ('admin\r\n', 'Onkar Manoj Sarvade', 'onkarmsarvade@gmail.com', 'Onkar123@');";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Star</title>
    <link rel="stylesheet" href="css.css">
</head>

<body>
<div class="container">
    <h2>Welcome to Star</h2>
    <p>Thank you for comming here, sign in to get information</p>
    <form action="index.php" method="post">
        <p class="title">log in</p>
        <input type="text" name="position" id="position" placeholder="Log in as">
        <input type="text" name="name" id="name" placeholder="Enter your name here">
        <input type="email" name="email" id="email" placeholder="Enter your email here">
        <input type="password" name="password" id="password" placeholder="Enter your password here">
        <button class="btn">sign in</button>
        <button class="btn" id="sub">submit</button>
    </form>
</div>
    <script src="index.js"></script>
    
</body>

</html>