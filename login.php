<?php
session_start();

if (isset($_SESSION['admin_logged'])) {
    header('Location: admin.php');
    exit();
}

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $host = "localhost"; $user = "root"; $password = ""; $dbname = "portfolio_bd";
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

    $username = trim($_POST['username']);
    $pass = trim($_POST['password']);

    $stmt = $pdo->prepare("SELECT * FROM admin WHERE username = ?");
    $stmt->execute([$username]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($pass, $admin['password'])) {
        $_SESSION['admin_logged'] = true;
        $_SESSION['admin_user'] = $admin['username'];
        header('Location: admin.php');
        exit();
    } else {
        $error = "Identifiants incorrects.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Administration</title>
    <style>
        body { background-color: #1f242d; color: #fff; font-family: sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-card { background: #323946; padding: 30px; border-radius: 10px; width: 300px; text-align: center; }
        input { width: 90%; padding: 10px; margin: 10px 0; border-radius: 5px; border: none; }
        button { background: #0ef; border: none; padding: 10px 20px; font-weight: bold; cursor: pointer; border-radius: 5px; color: #1f242d; width: 95%; }
        .error { color: #ff4d4d; font-size: 14px; }
    </style>
</head>
<body>
    <div class="login-card">
        <h2>Connexion Admin</h2>
        <?php if($error): ?><p class="error"><?= $error ?></p><?php endif; ?>
        <form method="POST">
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <button type="submit">Se connecter</button>
        </form>
    </div>
</body>
</html>