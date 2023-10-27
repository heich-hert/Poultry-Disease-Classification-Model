<?php
@include 'config.php';
session_start();

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $role = $_POST['role'];

    $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";
    
    $result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_array($result);
    if($row['role'] == 'admin'){
       $_SESSION['admin_name'] = $row['name'];
       header('location:admin_page.php'); 
    
    }elseif($row['role'] == 'user'){
    
       $_SESSION['user_name'] = $row['name'];
       header('location:user_page.php'); 
    
    }
    
    }else{
       $error[] = 'incorrect email or password!';
    }    



};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="form-container">
        <form action="" method="post">
            <h3>login now</h3>

            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };

            ?>
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
             <input type="submit" name="submit" value="login now" class="form-btn">
            <p>don't have and account? <a href="register_form.php">register now</a> </p>
        </form>
    </div>
</body>
</html>