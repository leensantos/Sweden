<?php
session_start(); //starts the session
if (!$_SESSION['user']) { //checks if user is not logged in
  header("location:index.php"); // redirects if user is not logged in
}
$user = $_SESSION['user']; //assigns user value
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/sign-in-style.css">
  <link rel="stylesheet" type="text/css" href="css/navigation-bar.css">
  <title>Register | The Grand Sweden Hotel</title>
</head>

<body>
  <!-- Nagigation bar -->
  <nav>
    <div class="logo"><a href="index.php">The Grand Sweden Hotel</a></div>
  </nav>

  <!-- Page Content -->
  <div class="login-page">
    <div class="box">
      <div class="form">
        <!-- Register form Start -->
        <form class="login-form" action="register.php" method="POST">
          <h3>Register</h3>
          <!-- <forms class="form-group">
            <input type="text" placeholder="First Name" class="form-control" required>
          </forms>
          <div class="form-group">
            <input type="text" placeholder="Last Name" class="form-control" required>
          </div> -->
          <div class="form-group">
            <input type="text" name="username" id="username" placeholder="Username" class="form-control" required>
          </div>
          <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
          </div>

          <input type="submit" value="Submit" class="submit-btn" />
          <p><a href="logout.php" class="lost-pass-btn">Logout <?php print "$user" ?> account</a></p>
        </form>
        <!-- Register form End -->
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
                         Print '<script>alert("The username already exist!");</script>'; //Prompts the user
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