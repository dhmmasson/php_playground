<?php
$host = 'localhost';
$dbname = 'mariadb';
$username = 'mariadb'; // default username with phpmyadmin
$password = 'mariadb'; // default password with phpmyadmin
$port = 3306; // default port with phpmyadmin

// use a try/catch block to catch potential errors
try {
    // create a new PDO object
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $username, $password);
    // set the PDO error mode to exception so that you can see errors if they occur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // if we reach this point, the connection was successful
    echo "<p>Connected successfully</p>";
} catch (PDOException $e) {
    // if an error occurs, catch it and display the error message
    // $e is an object of type PDOException
    echo "<p>Connection failed: " . $e->getMessage() . '</p>';
}
