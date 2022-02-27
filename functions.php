<?php

function connectDB()
{
    $param = 'mysql:dbname=list;host=localhost';

    try {
        $pdo =new PDO($param, 'root');
        return $pdo;
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
}