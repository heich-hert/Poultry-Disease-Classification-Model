<?php
@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
    header('location:login_form.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user page</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <div class="content">
            <h3>Hi, <span>user</span></h3>
            <h1> welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
            <p>We understand how crucial the health of your chickens is to you. Our platform is here to assist you in identifying and predicting potential health issues in your feathered friends. If you have an image of a sick chicken, you're in the right place!

Simply use the upload form below to share images of your chickens, and our advanced prediction system will analyze them to provide insights into potential health concerns. Don't worry; we're here to help ensure your chickens lead happy and healthy lives.

Thank you for entrusting us with the well-being of your chickens. Let's work together to keep your flock thriving!</p>
            <a href="login_form.php" class="btn" > signin</a>
            <a href="index.php" class="btn" > Upload Image</a>
            <a href="logout.php" class="btn" > logout</a>
        </div>
    </div>
</body>
</html>