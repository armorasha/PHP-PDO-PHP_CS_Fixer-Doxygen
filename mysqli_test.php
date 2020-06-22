<?php
error_reporting(E_ALL);
$conn = new mysqli('127.0.0.1', 'root', 'mysql', 'php_pdo', 3306);
$result = $conn->query("SELECT NOW()");
$now = $result->fetch_row()[0];
echo "$now\n";
