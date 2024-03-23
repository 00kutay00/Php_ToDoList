function deleteTask(task_id) {
    // Kullanıcıdan silme işlemini onaylama
    if (confirm("Are you sure you want to delete this task?")) {
        // AJAX isteği gönderme
        $.ajax({
            type: "POST",
            url: "assets/php/delete_task.php",
            data: { task_id: task_id },
            success: function(response) {
                // Başarılı bir şekilde silindiyse, sayfayı yenile
                location.reload();
            },
            error: function(xhr, status, error) {
                // Hata durumunda, hatayı göster
                console.error(xhr.responseText);
            }
        });
    }
}