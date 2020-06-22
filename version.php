<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'root';
$password = 'mysql';

$pdo = new PDO($dsn, $user, $password);

$stm = $pdo->query('SELECT VERSION()');

$version = $stm->fetch();

echo 'MySQL version being used is ' . $version[0] . PHP_EOL;
