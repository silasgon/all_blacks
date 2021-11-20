<?php

$host = 'localhost:3306';
$user = 'root';
$password = '';
$db_name = 'allblacks_db';

$conexao = mysqli_connect($host, $user, $password, $db_name);


function getConnection()
{
    $host = 'localhost:3306';
    $user = 'root';
    $password = '';
    $db_name = 'allblacks_db';

    try {
        $pdo = new PDO("mysql:dbname=$db_name;host=$host", "$user", $password);
        return $pdo;
        
    } catch (PDOException $ex) {
        echo "Error: " . $ex->getMessage();
    }
}

