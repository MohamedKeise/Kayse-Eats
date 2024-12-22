<!-- forgot_password.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('images/116118295-forgot-password-padlock-shows-login-authentication-invalid-remember-login-security-verification-3d.jpg') center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #673ab7;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            text-align: center;
            margin-top: 20px;
        }

        .form {
            background-color: rgba(255, 255, 255, 0.7);
            padding: 40px; /* Adjust padding for more height */
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            width: 500px; /* Set width to 500px */
            height: 300px; /* Set height to 500px */
            margin: 0 auto;
            border: 2px solid #673ab7;
            filter: saturate(50%);
            margin-top:95px;
        }

        input {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #673ab7;
            color: #fff;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        a {
            text-decoration: none;
            color: #673ab7;
        }

        a:hover {
            text-decoration: underline;
        }
        .ali{
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <DIV class="ali">
    <img src="images/kayse-eats-high-resolution-logo-transparent.ico" alt="homepage" class="dark-logo" />
    </DIV>

   

    <div class="container">
        <div class="form">
            <!-- Your form for password recovery -->
            <form action="password_recovery.php" method="post">
                <input type="email" placeholder="Email" name="email" required />
                <input type="submit" name="submit" value="Reset Password" />
            </form>
            <p>Password reset link has been sent to your email. Please check your inbox.</p>
            <p>Remember your password? <a href="index.php">Login</a></p>
        </div>
    </div>

    <!-- Include your scripts here -->

</body>

</html>
