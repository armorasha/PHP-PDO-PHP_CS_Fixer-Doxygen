<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'root';
$password = 'mysql';

// creating new PDO
$pdo = new PDO($dsn, $user, $password);

// inserting a row into the countries table
$pdo->exec("INSERT INTO countries(name, population) VALUES('Australia', 18200000)");

// PDO lastInsertId() method returns the last inserted row id.
$rowid = $pdo->lastInsertId();

echo "The last inserted row id is: $rowid<br>";

echo '<br><br>';
echo '<a href="../index.php/"><-Back</a>';
