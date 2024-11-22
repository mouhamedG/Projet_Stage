<?php

function getConnexion()
{
    $host = 'localhost';
    $dbname = 'espace_membres';
    $pseudo = 'root';
    $mdp = '';

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $pseudo, $mdp);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur  de connexion à la base de données : " . $e->getMessage());
    }
}