<?php
// Inclure la configuration de la base de données
include_once("config.php");

// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['user_id'])) {
    header("Location: connexion.php"); // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
    exit();
}

// Récupérer les informations de l'utilisateur connecté
$user_id = $_SESSION['user_id'];

// Vous pouvez effectuer d'autres opérations liées à la vérification ici

?>

<!DOCTYPE html>
<html>
<head>
    <title>Vérification</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h2>Vérification</h2>
    <p>Bienvenue, vous êtes connecté en tant qu'utilisateur ID <?php echo $user_id; ?>.</p>
    <p><a href="accueil.php">Accéder à la page d'accueil</a></p>
    <p><a href="deconnexion.php">Se déconnecter</a></p>
</div>
</body>
</html>
