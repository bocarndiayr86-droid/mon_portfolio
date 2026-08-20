<?php
// 1. Connexion à la base de données MySQL
$host     = "localhost";
$user     = "root";
$password = ""; // Par défaut vide sur WAMP/XAMPP
$dbname   = "portfolio_bd";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

// 2. Traitement des données soumises
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Nettoyage des entrées contre les failles XSS
    $nom       = htmlspecialchars(trim($_POST['nom']));
    $email     = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $telephone = htmlspecialchars(trim($_POST['telephone']));
    $sujet     = htmlspecialchars(trim($_POST['sujet']));
    $message   = htmlspecialchars(trim($_POST['message']));

    // Validation basique des champs obligatoires
    if (!empty($nom) && !empty($email) && !empty($sujet) && !empty($message)) {
        // Sécurisation contre les injections SQL (Requête préparée)
        $sql = "INSERT INTO messages (nom, email, telephone, sujet, message) VALUES (?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        
        if ($stmt->execute([$nom, $email, $telephone, $sujet, $message])) {
            // Redirection en cas de succès
            header("Location: index.php?status=success#contact");
            exit();
        }
    }
    
    // Redirection en cas d'erreur ou champ vide
    header("Location: index.php?status=error#contact");
    exit();
}
?>