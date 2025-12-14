<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BBUC WiFi System | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme -->
    <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4" style="max-width: 420px; width: 100%;">
        <h3 class="text-center mb-3 text-primary">BBUC WiFi System</h3>
        <p class="text-center text-muted">Admin Login</p>

        <form method="POST" action="login.php">
            <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" name="username" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100">Login</button>
        </form>

        <div class="text-center mt-3">
            <small class="text-muted">© Bishop Barham University College</small>
        </div>
    </div>
</div>

</body>
</html>
