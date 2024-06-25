<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Placeholder credentials for demonstration
    $correctUsername = 'admin';
    $correctPassword = 'password'; // In a real application, use hashed passwords

    if ($username == $correctUsername && $password == $correctPassword) {
        echo "Login successful. Welcome, " . htmlspecialchars($username) . "!";
        // Redirect to another page or dashboard here
    } else {
        echo "Invalid username or password.";
        // Optionally, redirect back to the login page or show an error message
    }
}
?>