<?php

function db()
{
    static $pdo = null;
    if ($pdo === null) {
        $host = 'localhost';
        $db   = 'dev.monbouquetpresdechezmoi.io';
        $user = 'dev.monbouquetpresdechezmoi.io';
        $pass = 'dev.monbouquetpresdechezmoi.io';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        $pdo = new PDO($dsn, $user, $pass, $options);
    }
    return $pdo;
}
