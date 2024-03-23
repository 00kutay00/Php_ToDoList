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

    // Formdan gelen görevi al
    $task = $_POST['task'];

    // Görevi MySQL veritabanına ekleme
    $sql = "INSERT INTO tasks (task_name) VALUES (:task)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':task', $task);

    if ($stmt->execute()) {
        // Görev başarıyla eklendiğinde index sayfasına yönlendirme
        header("Location: ../../index.html");
        exit(); // Kodun burada sonlanması için
    } else {
        echo "Error: Görev eklenemedi.";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

// PDO bağlantısını kapatma
$pdo = null;
?>