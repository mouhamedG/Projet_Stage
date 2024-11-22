<?php
//Authentification d'un utilisateur 


// Inclure la configuration de la base de données
include_once("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $pdo = getConnexion();
    $query = "SELECT * FROM users WHERE pseudo = ?";
    $stmt = $pdo->prepare($query);  //aide à protéger contre les injections SQL.
    $stmt->execute([$pseudo]);     //aide à protéger contre les injections SQL.
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['mdp'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        header("Location: ../accueil.html"); // Rediriger vers la page d'accueil
        exit();
    } else {
        echo " Mauvais nom d'utilisateur ou mot de passe.";
    }
}
