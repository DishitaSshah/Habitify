<?php
include 'connect.php';

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {
        echo "Login successful. Redirecting to profile page...";
        // Redirect to profile page
        header("Location: home(1).php");
        exit();
    } else {
        echo "Invalid email or password.";
    }

    $conn->close();
?>

