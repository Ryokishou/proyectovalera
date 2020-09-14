<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'bfvcdi2cm2w7y9sqsknr-mysql.services.clever-cloud.com');
define('DB_USERNAME', 'u4zclqfinln7qiw8');
define('DB_PASSWORD', 'oXu1Ybz9zJXsIi8Igy16');
define('DB_NAME', 'bfvcdi2cm2w7y9sqsknr');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>