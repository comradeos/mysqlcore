<?php

try {
    $db_pdo = new PDO('mysql:host=db;dbname=test_db', 'root', 'root');
    echo "<h2>pdo connected</h2>";
} catch (\Throwable $th) {
    echo "fucking fuck: $th";
}

try {
    $mysqli = new mysqli('db', 'root', 'root', 'test_db');
    echo "<h2>mysqli connected</h2>";
} catch (\Throwable $th) {
    echo "error: $th";
}

// echo phpinfo();

$result = $db_pdo->query('SELECT * FROM test_table');

foreach ($result as $row) {
    $id = $row['id'];
    $strValue = $row['str_value'];
    $decValue = $row['dec_value'];
    echo "$id | $strValue | $decValue<br>";
}

echo '<hr>';
