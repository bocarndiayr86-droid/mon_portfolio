<?php
session_start();

if (!isset($_SESSION['admin_logged'])) {
    header('Location: login.php');
    exit();
}

$host = "localhost"; $user = "root"; $password = ""; $dbname = "portfolio_bd";
$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);

// Suppression d'un message si demandé
if (isset($_GET['delete'])) {
    $id = (int)$_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->execute([$id]);
    header('Location: admin.php');
    exit();
}

// Récupération des messages
$stmt = $pdo->query("SELECT * FROM messages ORDER BY date_envoi DESC");
$messages = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Administration - Portfolio</title>
    <style>
        body { background: #1f242d; color: #fff; font-family: sans-serif; padding: 30px; }
        header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; }
        table { width: 100%; border-collapse: collapse; background: #323946; }
        th, td { padding: 12px; text-align: left; border-bottom: 1px solid #1f242d; }
        th { background: #0ef; color: #1f242d; }
        .btn-logout { background: #ff4d4d; color: white; padding: 8px 15px; text-decoration: none; border-radius: 5px; }
        .btn-delete { color: #ff4d4d; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <header>
        <h1>Tableau de Bord - Messages reçus</h1>
        <a href="logout.php" class="btn-logout">Déconnexion</a>
    </header>

    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Sujet</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $msg): ?>
            <tr>
                <td><?= $msg['date_envoi'] ?></td>
                <td><?= htmlspecialchars($msg['nom']) ?></td>
                <td><?= htmlspecialchars($msg['email']) ?></td>
                <td><?= htmlspecialchars($msg['telephone']) ?></td>
                <td><?= htmlspecialchars($msg['sujet']) ?></td>
                <td><?= htmlspecialchars($msg['message']) ?></td>
                <td><a href="admin.php?delete=<?= $msg['id'] ?>" class="btn-delete" onclick="return confirm('Supprimer ?')">Supprimer</a></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>