<?php
$dsn = 'mysql:dbname=library;host=localhost;charset=utf8';
$user = 'root';
$pwd = '';

try
{
    $dbh = new PDO($dsn, $user, $pwd);
}catch(PDOException $e)
{
    echo 'Database connection error'.$e->getMessage();
    exit;
}
?>