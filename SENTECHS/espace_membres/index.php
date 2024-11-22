<?php
// Rediriger vers la page d'accueil si l'utilisateur est connecté
session_start();
if (isset($_SESSION['user_id'])) {
    header("Location: ../accueil.html");
    exit();
} else {
    header("Location: connexion.php");
    exit();
}
