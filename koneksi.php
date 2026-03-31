<?php
$host     = 'localhost';
$dbname   = 'portfolio_db';
$username = 'root';       
$password = '';           

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    die('<div style="color:red;text-align:center;padding:40px;">
            <h2>Koneksi Database Gagal</h2>
            <p>' . htmlspecialchars($e->getMessage()) . '</p>
        </div>');
}