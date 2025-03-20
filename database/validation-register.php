<?php
include "connection-database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Enkripsi password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepared Statement
    $query = "INSERT INTO tbl_user (username, password) VALUES (?, ?)";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("ss", $username, $hashed_password);
    
    if ($stmt->execute()) {
        header("Location: ../login-page.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
    $connection->close();
}
?>