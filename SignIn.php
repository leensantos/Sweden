<?php
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/sign-in-style.css">
    <title>Sign In | The Grand Sweden Hotel</title>
</head>

<body>
    <div class="login-page">
        <div class="box">
            <div class="box-form-sign-up left">
                <h3>Create Account</h3>
                <p>Sign up and receive updates about exclusive experiences, events, and more!</p>
                <button type="button" class="register-btn">Register</button>
            </div>
            <div class="box-form box-hidden middle"></div>
            <div class="box-form-sign-in box-hidden right">
                <h3>One of us?</h3>
                <p>If you already has an account, just sign in. We missed you!</p>
                <button type="button" class="login-btn">Login</button>
            </div>
            <div class="form">
                <!-- Login form Start -->
                <form action="" class="login-form">
                    <h3>Log In</h3>
                    <div class="form-group">
                        <input type="text" placeholder="Email Address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control" required>
                    </div>
                    <input type="submit" class="submit-btn" />
                    <p><a href="#" class="lost-pass-btn">Lost Your Password ?</a>
                    </p>
                </form>
                <!-- Login form End -->

                <!-- Register form Start -->
                <form action="" class="register-form form-hidden">
                    <h3>Register</h3>
                    <forms class="form-group">
                        <input type="text" placeholder="First Name" class="form-control" required>
                    </forms>
                    <div class="form-group">
                        <input type="text" placeholder="Last Name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Email Address" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control" required>
                    </div>

                    <input type="submit" class="submit-btn" />
                    <p><a href="#" class="lost-pass-btn">Lost Your Password ?</a>
                </form>
                <!-- Register form End -->

                <!-- Lost Password form Start -->
                <form action="" class="lost-password-form form-hidden">
                    <h3>Lost Your Password?</h3>
                    <h5>You will receive a link to create a new password via email.</h5>
                    <div class="form-group">
                        <input type="text" placeholder="Email Address" class="form-control" required>
                    </div>
                    <input type="submit" class="submit-btn" value="Reset Password" />
                    <p><a href="#" class="login-btn">Login </a> | <a href="#" class="register-btn"> Register</a></p>
                </form>
                <!-- Lost Password form End -->
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/sign-in-script.js"></script>
</body>

</html>