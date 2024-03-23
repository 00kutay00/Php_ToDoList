<?php
// MySQL bağlantısı için gerekli bilgiler
$servername = "localhost";
$username = "root"; // MySQL kullanıcı adı
$password = ""; // MySQL şifre
$database = "git_todolist"; // Kullanılacak veritabanı adı

try {
    // PDO bağlantısı oluşturma
    $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Hata modunu ayarlama
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Görevleri MySQL veritabanından çekme
    $sql = "SELECT * FROM tasks";
    $stmt = $pdo->query($sql);

    // Görevleri HTML içinde listeleme
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch()) {
        	echo "<li class='list-group-item'>" . $row["task_name"] . " <button class='btn btn-danger btn-sm float-end' onclick='deleteTask(" . $row["id"] . ")'>Delete</button></li>";
    		}
    } else {
        echo "No tasks found";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// PDO bağlantısını kapatma
$pdo = null;
?>