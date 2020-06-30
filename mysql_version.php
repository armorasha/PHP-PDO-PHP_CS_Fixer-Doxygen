    <?php

    $dsn = 'mysql:host=localhost;dbname=php_pdo'; //DSN
    $user = 'root';
    $password = 'mysql';

    // creating new PDO
    $pdo = new PDO($dsn, $user, $password);

    // using the PDO, a query is being made and saved to $smt
    $stm = $pdo->query('SELECT VERSION()');

    //The PDO statement's fetch() method fetches the next row from a result set.
    // In our case it is a version of MySQL.
    $version = $stm->fetch();

    //The $version is an array, we get its first value.
    echo 'MySQL version being used is ' . $version[0] . '<br>';

    echo '<br><br>';
    echo '<a href="../index.php/"><-Back</a>';
    ?>