<?php

// MySQL bağlantısı için gerekli bilgiler
$servername = "localhost";
$username = "root"; // MySQL kullanıcı adı
$password = ""; // MySQL şifre
$database = "git_todolist"; // Kullanılacak veritabanı adı

try {
    // PDO bağlantısı oluşturma
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Hata modunu ayarlama
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>