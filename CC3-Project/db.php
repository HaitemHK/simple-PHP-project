<?php
$host = 'localhost';
$port = 3306;
$dbname = 'piscine';
$user = 'root';
$pswd = '';

$dsn = "mysql:host={$host};port={$port};dbname={$dbname}";

try {

    $con = new PDO($dsn, $user, $pswd);

} catch (PDOException $e) {

    echo("Could not connect to the database $db :" . $e->getMessage());
}

?>