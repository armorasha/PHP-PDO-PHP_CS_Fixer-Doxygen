<?php

$dsn = 'mysql:host=localhost;dbname=pdo_php';
//kjhksdg
$user = 'root';
$password = 'xxxxx';

$pdo = new PDO($dsn, $user, $password);

$stm = $pdo->query('SELECT VERSION()');

     $version = $stm->fetch();

echo $version[0] . PHP_EOL;

echo "<div>
<p>hi</P>
</div>";

?>

<div>  <div><p>hi</P>
</div></div>
