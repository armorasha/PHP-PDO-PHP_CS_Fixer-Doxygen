<?php

$dsn = 'mysql:host=localhost;dbname=pdo_php';
$user = 'root';
$password = 'mysql';

$pdo = new PDO($dsn, $user, $password);

$stm = $pdo->query('SELECT VERSION()');

$version = $stm->fetch();

echo $version[0] . PHP_EOL;
