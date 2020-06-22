<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'root';
$password = 'mysql';

// creating new PDO
$pdo = new PDO($dsn, $user, $password);

$stm = $pdo->query("SELECT * FROM countries WHERE id=1");

$col_meta = $stm->getColumnMeta(0); //The column metadata of a result is retrieved with getColumnMeta() method.

echo "Table name: {$col_meta["table"]}<br>";
echo "Column name: {$col_meta["name"]}<br>";
echo "Column length: {$col_meta["len"]}<br>";
echo "Column flags: {$col_meta["flags"][0]} {$col_meta["flags"][1]} <br>";

// Result> Table name: countries - Column name: id - Column length: 20 - Column flags: not_null primary_key


echo '<br><br>';
echo '<a href="../index.php/"><-Back</a>';
