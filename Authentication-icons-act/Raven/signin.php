<?php
// Include database connection
require_once 'db.php';

// Start session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check the user in the database
    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // If user exists, redirect to intro.php
    if ($result->num_rows > 0) {
        $_SESSION['user'] = $email; // Save user session
        header("Location: intro.php");
        exit();
    } else {
        // Invalid credentials
        $error = "Invalid email or password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="signin.css">
</head>
<body>
<div class="container sign-in d-flex flex-column align-items-center justify-content-center">
    <div class="row text-center mb-4">
        <h1 class="text-white">Sign In</h1>
        <p class="text-light">Access your account by signing in below</p>
    </div>
    <form action="signin.php" method="POST" class="row g-3 col-lg-6 col-md-8 col-sm-10">
        <div class="col-12">
            <label for="email" class="form-label text-white"> <i class="bi bi-person-fill"></i>Email</label>
           
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
        </div>
        <div class="col-12">
            <label for="password" class="form-label text-white"><i class="bi bi-key-fill"></i>Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" required>
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary w-50">Sign In</button>
        </div>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
