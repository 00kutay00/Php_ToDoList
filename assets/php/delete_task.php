<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root"; // MySQL kullanıcı adı
$password = ""; // MySQL şifre
$database = "git_todolist"; // Kullanılacak veritabanı adı

try {
    // PDO bağlantısı oluşturma
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Hata modunu ayarlama
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Görevin ID'sini alma
    $task_id = $_POST['task_id'];

    // Görevi veritabanından silme sorgusu
    $sql = "DELETE FROM tasks WHERE id = :task_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':task_id', $task_id);
    $stmt->execute();

    echo "Task successfully deleted";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// PDO bağlantısını kapatma
$pdo = null;
?>