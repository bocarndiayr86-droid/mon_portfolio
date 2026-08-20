<?php
require_once 'bd.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $sujet = htmlspecialchars(trim($_POST['sujet']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (!empty($nom) && !empty($email) && !empty($message)) {
        // Protection contre les injections SQL (Requête préparée)
        $stmt = $pdo->prepare("INSERT INTO messages (nom, email, telephone, sujet, message) VALUES (?, ?, ?, ?, ?)");
        if ($stmt->execute([$nom, $email, $telephone, $sujet, $message])) {
            header("Location: index.php?status=success#contact");
            exit();
        }
    }
    header("Location: index.php?status=error#contact");
    exit();
}
?>