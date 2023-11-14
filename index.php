<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body style="background-image: url('chicken5.jpeg');">

    <header>
        <nav>
            <div class="container">
                <div class="logo">
                    <img src="logo.jpeg" height="40px" width="40 px" >
                </div>
                <ul>
                    
                    <li><a href="login_form.php">Sign In</a></li>
                    <li><a href="register_form.php">Sign Up</a></li>
                    <li><a href="index.php" class="active">Home</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="hero">
        <div class="container">
            <h1>DISEASE PREDICTION SYSTEM</h1>
            <p>We understand how crucial the health of your chickens is to you. Our platform is here to assist you in identifying and predicting potential health issues in your feathered friends. If you have an image of a sick chicken, you're in the right place!

Simply use the upload form below to share images of your chickens, and our advanced prediction system will analyze them to provide insights into potential health concerns. Don't worry; we're here to help ensure your chickens lead happy and healthy lives.

Thank you for entrusting us with the well-being of your chickens. Let's work together to keep your flock thriving!</p>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <textarea name="description" placeholder="Enter description"></textarea>
                <input type="submit" value="Upload">
            </form>
        </div>
    </section>

</body>
</html>
