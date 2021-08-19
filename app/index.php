<?php

try {
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'db';
    $dbname = 'database';
    $user = 'user';
    $pass = 'pass';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';

    echo '<table>';
    echo '<tr><th>Username</th><th>Password</th></tr>';
    $sql =  'SELECT * FROM user_details ORDER BY username';
    foreach  ($conn->query($sql) as $row) {
        print '<tr><td>';
        print $row['username'] . "\t";
        print '</td><td>';
        print  $row['password'] . "\n";
        print '</td></tr>';
    }
    echo '</table><br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}



?>