<?php

$dsn = 'mysql:host=localhost;dbname=php_pdo';
$user = 'root';
$password = 'mysql';

// creating new PDO
$pdo = new PDO($dsn, $user, $password);

// A transaction is an atomic unit of database operations against the data in one or more databases.
// The effects of all the SQL statements in a transaction can be either all committed to the database or all rolled back.

// The PDO beginTransaction() initiates a new transaction.
// The PDO commit() commits all transactions.
// And the PDO rollback() rolls back all transactions, if any query fails.

// first set of queries where all queries will succeed
// commit success
try {
    // You need to set these attributes or else commit/rollback will not work properly.
    // Although there are several error handling modes in PDO, the only proper one is PDO::ERRMODE_EXCEPTION. 
    // This is all you need for the basic error reporting.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->beginTransaction();
    $stm = $pdo->exec("INSERT INTO countries(name, population) VALUES ('Iraq', 38274000)");
    $stm = $pdo->exec("INSERT INTO countries(name, population) VALUES ('Uganda', 37673800)");

    $pdo->commit();
    echo 'First set of queries commit successful<br>';
} catch (Exception $e) {

    $pdo->rollback();
    echo 'First set of queries rolled back<br>';
    throw $e;
}

// second set of queries where one query will fail and the other succeed
// rollback
try {
    $pdo->beginTransaction();
    $stm = $pdo->exec("INSERT INTO countries(name, population) VALUES ('Iraq3', 38274000)"); // insert success, but will be rolled back
    $stm = $pdo->exec("INSERT INTO countries(nam, pop) VALUES ('Uganda3', 37673800)"); // insert fails, so this will roll back the above query too

    $pdo->commit();
    echo 'Second set of queries commit successful<br>';
} catch (Exception $e) {

    $pdo->rollback();
    echo 'Second set of queries rolled back<br>';
    throw $e;
}

echo '<br><br>';
echo '<a href="../index.php/"><-Back</a>';
