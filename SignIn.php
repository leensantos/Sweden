<!DOCTYPE html>
<html lang="en">

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

            </div>
            <div class="box-form box-hidden middle"></div>
            <div class="box-form-sign-in box-hidden right">

            </div>
            <div class="form">
                <!-- Login form Start -->
                <form class="login-form" form action="checklogin.php" method="POST">
                    <h3>ADMIN LOGIN</h3>
                    <div class="form-group">
                        <input type="text" placeholder="Username" class="form-control" name="username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" placeholder="Password" class="form-control" name="password" required>
                    </div>
                    <input type="submit" class="submit-btn" value="Login" />
                    <!-- <p><a href="#" class="lost-pass-btn">Lost Your Password ?</a> -->
                    </p>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/sign-in-script.js"></script>
</body>

</html>