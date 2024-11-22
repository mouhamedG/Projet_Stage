<?php
//Inscription d'un utilisateur


// Inclure la configuration de la base de données
require_once("config.php");



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $pdo = getConnexion();   // pour obtenir une connexion PDO à la base de données
    $query = "INSERT INTO users (pseudo, email, mdp) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$pseudo, $email, $password]);

    header("Location: connexion.php");
    exit();
}
?>
