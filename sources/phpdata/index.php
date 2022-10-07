<?php

$isConnected = '';

try {
    $db_pdo = new PDO('mysql:host=db;dbname=test_db', 'root', 'root');
    $isConnected .= 'pdo connected, ';
} catch (\Throwable $th) {
    $isConnected .= 'error pdo connection, ';
}

try {
    $mysqli = new mysqli('db', 'root', 'root', 'test_db');
    $isConnected .= 'mysqli connected';
} catch (\Throwable $th) {
    $isConnected .= 'error mysqli connection';
}

echo "<h2>$isConnected</h2>";

$result = $db_pdo->query('SELECT * FROM test_table');

foreach ($result as $row) {
    $id = $row['id'];
    $strValue = $row['str_value'];
    $decValue = $row['dec_value'];

    echo "<p>
            <b>id:</b> $id, 
            <b>str_value:</b> $strValue, 
            <b>dec_value:</b> $decValue
         </p>";
}
