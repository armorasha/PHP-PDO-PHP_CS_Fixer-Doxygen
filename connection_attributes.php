<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'root';
$password = 'mysql';

// creating new PDO
$pdo = new PDO($dsn, $user, $password);

// The getAttribute() method retrieves a database connection attribute. 
// In the example, we get the driver name, server version, and autocommit mode with the getAttribute() method.
// Result> Driver: mysql - Server version: 5.7.22-0ubuntu0.16.04.1 - Autocommit mode: 1

$stm = $pdo->query("SELECT name, population FROM countries WHERE id=1");

$driver = $pdo->getAttribute(PDO::ATTR_DRIVER_NAME);
$server_version = $pdo->getAttribute(PDO::ATTR_SERVER_VERSION);
$autocommit_mode = $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT);

echo "Driver: $driver<br>";
echo "Server version: $server_version<br>";
echo "Autocommit mode: $autocommit_mode<br>";


echo '<br><br>';
echo '<a href="../index.php/"><-Back</a>';
