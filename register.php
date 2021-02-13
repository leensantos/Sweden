<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIGNUP</title>
</head>

<body>
    <div class="circle"></div>
    <div class="content">
        <div class="textBox">
            <h2> REGISTER</h2>
            <form action="register.php" method="POST">
                <!-- end of for register container -->
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
                <input type="submit" class="register" value="Register" /><br /><br />

                <button type="button" class="submit" onclick="window.location.href='signin.php'">Have an Account? Login
                    Here</button>
            </form>
        </div>
    </div>

    </div>

</body>

</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $username = ($_POST['username']);
            $password = ($_POST['password']);
            $bool = true;
            $db_name = "swedendb";
            $db_username = "root";
            $db_pass = "";
            $db_host = "localhost";
                $con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or
                  die(mysqli_error()); //Connect to server
                     $query = "SELECT * from users";
                     $results = mysqli_query($con, $query); //Query the users table
                     while($row = mysqli_fetch_array($results)) //display all rows from query
                {
                     $table_users = $row['username']; // the first username row is passed on to $table_users, and so on until the query is finished
                     if($username == $table_users) // checks if there are any matching fields
                {
                         $bool = false; // sets bool to false
                         Print '<script>alert("Username has been taken!");</script>'; //Prompts the user
                        Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
                }
                }
                      if($bool) // checks if bool is true
                {
                     mysqli_query($con, "INSERT INTO users (username, password) VALUES
                      ('$username','$password')"); //Inserts the value to table users
                         Print '<script>alert("Successfully Registered!");</script>'; // Prompts the user
                      Print '<script>window.location.assign("register.php");</script>'; // redirects to register.php
                }
        }
?>