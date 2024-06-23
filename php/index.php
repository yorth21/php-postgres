<?php
$dsn = 'pgsql:host=db;port=5432;dbname=modelosdb';
$username = 'postgres';
$password = '123456';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conectado a PostgreSQL exitosamente!";
} catch (PDOException $e) {
    echo 'Error al conectar: ' . $e->getMessage();
}
?>
