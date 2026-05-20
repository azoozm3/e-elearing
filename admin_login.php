<?php
session_start();
if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    header('Location: admin.php');
    exit;
}
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    if ($username === 'admin123' && $password === 'admin123') {
        $_SESSION['admin'] = true;
        header('Location: admin.php');
        exit;
    }
    $error = 'Invalid credentials. Please use admin123 / admin123.';
}
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">
</head>
<body class="landing-page">
    <div class="landing-card">
        <h1>Admin Login</h1>
        <p>Enter your admin credentials to access the quiz results panel.</p>
        <?php if ($error): ?>
            <div style="margin-bottom:1rem;padding:1rem;border-radius:12px;background:#fee2e2;color:#991b1b;">
                <?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?>
            </div>
        <?php endif; ?>
        <form class="landing-form" method="post">
            <input name="username" type="text" placeholder="Admin username" maxlength="80" required>
            <input name="password" type="password" placeholder="Admin password" maxlength="80" required>
            <button type="submit">Login</button>
        </form>
        <p class="landing-admin">
            <a href="index.php">← Back to landing page</a>
        </p>
    </div>
</body>
</html>
