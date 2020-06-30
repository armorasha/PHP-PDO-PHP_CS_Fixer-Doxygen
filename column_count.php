<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'root';
$password = 'mysql';

// creating new PDO
$pdo = new PDO($dsn, $user, $password);

//Metadata is information about the data in a database.
// Metadata contains information about the tables and columns in which we store data.
// The number of rows that an SQL statement affects is metadata.
// The number of rows and columns returned in a result set are metadata as well.

$stm = $pdo->query('SELECT name, population FROM countries WHERE id=1');

//columnCount() method returns the number of columns in the result set. Returns '2' columns: country name, population.
$ncols = $stm->columnCount();

echo "The result set contains $ncols columns: country name, population<br>";

echo '<br><br>';
echo '<a href="../index.php/"><-Back</a>';
