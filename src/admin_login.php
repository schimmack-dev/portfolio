<?php
session_start();
$fehlermeldung = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adminUser = 'admin';
    $adminPass = 'geheim';
    if ($_POST['username'] === $adminUser && $_POST['password'] === $adminPass) {
        $_SESSION['admin_logged_in'] = true;
        header('Location: admin.php');
        exit;
    } else {
        $fehlermeldung = 'Benutzername oder Passwort falsch!';
    }
}
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .login-form {
            max-width: 350px;
            margin: 4rem auto;
            background: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
        }

        .login-form label {
            display: block;
            margin-bottom: 0.5rem;
        }

        .login-form input {
            width: 100%;
            padding: 0.7rem;
            margin-bottom: 1.2rem;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
        }

        .login-form button {
            background: #4299e1;
            color: #fff;
            border: none;
            padding: 0.8rem 2rem;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
        }

        .login-form button:hover {
            background: #2a4365;
        }

        .login-error {
            color: #e53e3e;
            text-align: center;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <form class="login-form" method="post">
        <h2>Admin Login</h2>
        <?php if ($fehlermeldung): ?>
            <div class="login-error"><?php echo htmlspecialchars($fehlermeldung); ?></div>
        <?php endif; ?>
        <label for="username">Benutzername</label>
        <input type="text" id="username" name="username" required autofocus>
        <label for="password">Passwort</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
</body>

</html>