<?php
include "connection-database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    // Ambil data user berdasarkan username
    $query = "SELECT * FROM tbl_user WHERE username = ?";
    $stmt = $connection->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row['password'];

        // // Debugging
        // echo "Password yang diinput: " . $password . "<br>";
        // echo "Password yang tersimpan (hash): " . $hashed_password . "<br>";

        // Cek apakah password cocok
        if (password_verify($password, $hashed_password)) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: ../dashboard.php");
            exit();
        } else {
            echo "<script>alert('❌ Password tidak cocok!'); window.history.back();</script>";
            exit();
        }
    } else {
        echo "<script>alert('❌ Username tidak ditemukan!'); window.history.back();</script>";
        exit();
    }

    $stmt->close();
    $connection->close();
}
?>