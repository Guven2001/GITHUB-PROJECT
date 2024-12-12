<?php
session_start();
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $position = mysqli_real_escape_string($conn, $_POST['position']);


    // Check if username exists
    $query = "SELECT * FROM admins WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify password
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username; // Save session
            header("Location: dashboard.php"); // Redirect to dashboard
        }
         else {
            echo "Invalid password.";
        }
    } 
    else {
        echo "User not found.";
    }
}
?>
