<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>signin</title>
</head>

<body>
    <div class="circle"></div>
    <div class="content">
        <div class="textBox">
            <h2> SIGNIN</h2>
            <form action="checklogin.php" method="POST">
                <!-- for the login -->
                <table>
                    <tr>
                        <td><input type="text" class="field" name="username" required="required"
                                placeholder="Enter Username" />
                    </tr>
                    <tr>
                        <td><input type="password" class="field" name="password" required="required"
                                placeholder="Enter Password" />
                    </tr>
                </table><br>
                <input type="submit" value="Login" class="register" /> <br><br> <!-- end of register button-->
                <button type="button" class="submit" onclick="window.location.href='register.php'">Don't Have an
                    Account? Register Here</button> <!-- login button -->
            </form>
        </div>
    </div>

    </div>

</body>

</html>