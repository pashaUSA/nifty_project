<?php

$databaseName = "caswork_nifty_project";
$databaseUser = "caswork_nifty_u";
$databasePassword = "!nifty503";

define("DB_DSN", "mysql:host=localhost;dbname=$databaseName;charset=utf8");
define("DB_USER", $databaseUser);
define("DB_PASS", $databasePassword);

// Create a database connection

try {
     // 1. Create a database connection
     $connection = new PDO(DB_DSN,DB_USER,DB_PASS);
     // Turn on display of errors (exceptions) so we can see problems if they occur
     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} 
catch (PDOException $e) {
     die('DB connection failed:');
}

?>
