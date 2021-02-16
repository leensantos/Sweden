<?php
//DB Params for production DB
// define('CERTIFICATE_AUTHORITY_FILE', SERVER_ROOT . 'BaltimoreCyberTrustRoot.crt.pem');
// define('DB_SERVER', 'sweden-dataserver.mysql.database.azure.com');
// define('DB_USER', 'swedenuser@sweden-dataserver'); 
// define('DB_PASS', '9HcXkTzJe!');
// define('DB_NAME', 'SWEDEN_DATABASE');
// define('DB_PORT', 3306);

$db_name = "DATABASE_SWEDEN";
$db_username = "swedenuser";
$db_pass = "9HcXkTzJe!";
$db_host = "sweden-dataserver.mysql.database.azure.com";
$certificate_file = "BaltimoreCyberTrustRoot.crt.pem";
$db_port = 3306;
//$db_name = "swedendb";
//$db_username = "sweden";
//$db_pass = "Passw0rd";
//$db_host = "localhost";
//$con = mysqli_connect("$db_host","$db_username","$db_pass", "$db_name") or die(mysqli_connect_error()); //Connect to server

$con = mysqli_init();
mysqli_ssl_set($con, NULL,NULL, $certificate_file, NULL, NULL);
mysqli_real_connect($con, $db_host, $db_username, $db_pass, $db_name, $db_port, MYSQLI_CLIENT_SSL);
if (mysqli_connect_error($con)) {
  die('Failed to connect to MySQL: '.mysqli_connect_error());
}
?>

