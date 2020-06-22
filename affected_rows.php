<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'root';
$password = 'mysql';

// creating new PDO
$pdo = new PDO($dsn, $user, $password);

//exec returns the number of affected rows by the query
$nrows = $pdo->exec("DELETE FROM countries WHERE id IN (1, 2, 3)");

echo "The statement affected $nrows rows<br>";

echo '<br><br>';
echo '<a href="../index.php/"><-Back</a>';
