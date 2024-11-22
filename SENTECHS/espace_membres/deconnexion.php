<?php
// Inclure la configuration de la base de données
include_once("config.php");

session_start();
session_destroy();

header("Location: connexion.php"); // Rediriger vers la page de connexion
exit();
?>
