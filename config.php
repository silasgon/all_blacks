<?php

$host = 'localhost:3306';
$user = 'root';
$password = '';
$db_name = 'allblacks_db';

$pdo = new PDO("mysql:dbname=$db_name;host=$host", "$user", $password);

$conexao = mysqli_connect($host, $user, $password, $db_name);
