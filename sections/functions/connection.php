<?php

define("DB_DSN", "mysql:host=localhost;dbname=caswork_nifty_project;charset=utf8");
define("DB_USER", "caswork_nifty_u");
define("DB_PASS", "!nifty503");

// Create a database connection

try {
     // 1. Create a database connection
     $connection = new PDO(DB_DSN,DB_USER,DB_PASS);
     // Turn on display of errors (exceptions) so we can see problems if they occur
     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     // Display message on successful connection
     echo '<div class="box-success"><strong>1.</strong> Database connection succeeded!</div>';
} 
catch (PDOException $e) {
     die('<div class="box-warning"><strong>1.</strong> Database connection failed: ' . $e->getMessage() . '</div>');
}

?>