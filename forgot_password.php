<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <!-- Include necessary CSS files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <!-- Include your login page CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <style type="text/css">
        body {
            background-image: url('images/img/pimg.jpg'); /* Replace 'images/background.jpg' with your background image path */
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        .header {
         
            color: #fff;
            padding: 10px 0;
            text-align: left;
            background-image: url('images/footer_pattern.png')
        }

        .header img {
            width: 100px; /* Adjust the width as needed */
            height: auto;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .module {
            width: 400px;
            margin: auto;
            margin-top: 100px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        .module form {
            margin-bottom: 20px; /* Add margin to separate form and link */
        }

        .module form input[type="email"]{
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
    
    .module form input[type="submit"] {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
        background-color: #5c4ac7; /* Set the background color */
        color: #fff; /* Set the text color */
        cursor: pointer; /* Change cursor on hover */
    }



        .module form label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        .module form input[type="checkbox"] {
            margin-top: 10px;
        }

        .module form p {
            margin-top: 10px;
            font-size: 14px;
        }

        .footer {
        background-image: url('images/footer_pattern.png');
        color:white;
        font-size: 23px;
            padding: 20px 0;
            text-align: center;
            margin-top: 175px;

        }

        .footer p {
            margin: 0;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
        submit{
            background-color: #5c4ac7;
        }
        
    </style>
</head>

<body>
    <div class="header">
    <img class="img-rounded" src="images/kayse-eats-high-resolution-logo-transparent (2).ico" alt="Logo"><!-- Replace 'images/logo.png' with your logo image path -->
      
    </div>

    <div class="module">
        <div class="form">
            <p style="font-size: 15px; color: #555; margin-bottom: 30px; text-align: center;">Please enter the email associated with your account. We'll send a password reset link to your email.</p>
            <form id="forgotPasswordForm" action="" method="post">
                <label for="email">Enter your email:</label>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <input type="submit" name="submit" value="Reset Password">
                <label for="remember"> <input type="checkbox" id="remember" name="remember"> Remember me</label>
                <p>Remembered your password? <a href="login.php">Back to Login</a></p>
            </form>
            <?php
            if(isset($_POST['submit'])) {
                // Add your PHP code here to handle form submission
                // For example, you can process the email entered and send a reset password link
                // You can also display success or error messages here
                // Remember to replace this example with your actual PHP code
                echo '<span style="color: green;">Password reset link has been sent to your email.</span>';
            }
            ?>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 Your Company. All rights reserved.</p>
    </div>

    <!-- Include your scripts here -->
</body>

</html>
