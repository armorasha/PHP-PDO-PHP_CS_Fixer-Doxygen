<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'root';
$password = 'mysql';

// creating new PDO
$pdo = new PDO($dsn, $user, $password);

$id = 10;

// 1. prepared statement is being declared. 'id=12' will be inserted here.
$stm = $pdo->prepare('SELECT * FROM countries WHERE id = ?');

// 2. prepared statement is being prepared.
$stm->bindValue(1, $id);

// 3. prepared statement is being executed.
$stm->execute();

$row = $stm->fetch(PDO::FETCH_ASSOC); //fetching data as an associative array

echo 'Id: ' . $row['id'] . '<br>';
echo 'Name: ' . $row['name'] . '<br>';
echo 'Population: ' . $row['population'] . '<br>';
echo '<br>';

echo '<br><br>';
echo '<a href="../index.php/"><-Back</a>';
