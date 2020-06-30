<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'root';
$password = 'mysql';

// creating new PDO
$pdo = new PDO($dsn, $user, $password);

$stm = $pdo->query('SELECT * FROM countries');

// The fetch style parameter controls how the next row will be returned to the caller.
// PDO::FETCH_ASSOC returns an array indexed by column name,..
// ..PDO::FETCH_NUM returns an array indexed by column number..
// ..and the PDO::FETCH_BOTH returns an array indexed by both column name and indexed column number.
// The default fetch style is PDO::FETCH_BOTH.

$rows = $stm->fetchAll(PDO::FETCH_NUM);

foreach ($rows as $row) {
	printf("$row[0] $row[1] $row[2]"); //column numbers 0,1,2 used since FETCH_NUM was used
	echo '<br>';
}

echo '<br><br>';
echo '<a href="../index.php/"><-Back</a>';
