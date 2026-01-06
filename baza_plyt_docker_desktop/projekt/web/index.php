<?php
$mysqli = new mysqli(
    getenv('DB_HOST'),
    getenv('DB_USER'),
    getenv('DB_PASS'),
    getenv('DB_NAME')
);

if ($mysqli->connect_errno) {
    echo "Błąd połączenia: " . $mysqli->connect_error;
} else {
    echo "Połączenie OK!<br>";
    $result = $mysqli->query("SELECT NOW() AS czas");
    $row = $result->fetch_assoc();
    echo "Czas z bazy: " . $row['czas'];
}
