<?php 
    $host ='127.0.0.1';
    $db = 'attendance_db';
    $user = 'root';
    $pass = '';
    $dbport = 3307;
    $charset = 'utf8';

    $dsn = "mysql:host=$host; dbname=$db;charset=$charset; port=$dbport";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
        echo 'Hello Database';

    } catch(PDOException $e){
        throw new PDOException($e->getMessage());

    }

    require_once 'crud.php';
    $crud = new crud($pdo);


?>