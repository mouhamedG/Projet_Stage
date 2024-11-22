<?php
if (isset($_POST['submit'])) {
    // Sécuriser les données d'entrée
    function sanitize_input($data)
    {
        return htmlspecialchars(trim($data));
    }

    $prenom = sanitize_input($_POST['prenom']);
    $nom = sanitize_input($_POST['nom']);
    $email = sanitize_input($_POST['email']);
    $telephone = sanitize_input($_POST['telephone']);
    $activite = sanitize_input($_POST['activite']);
    $tjm = sanitize_input($_POST['tjm']);
    $competences = sanitize_input($_POST['competences']);
    $projet = sanitize_input($_POST['projet']);

    // Vérifier que tous les champs sont remplis
    if (!empty($prenom) && !empty($nom) && !empty($email) && !empty($telephone) && !empty($activite) && !empty($tjm) && !empty($competences) && !empty($projet)) {
        $to = "mrassoul159@gmail.com";
        $from = $email;

        // Configurer les en-têtes de l'e-mail
        $headers = "From: \"$prenom $nom\" <$from>\r\n";
        $headers .= "Reply-To: $from\r\n";
        $headers .= "Content-type: text/html; charset=UTF-8";

        // Construire le message HTML
        $message = "<html><body>";
        $message .= "<p>Prénom : " . nl2br($prenom) . "</p>";
        $message .= "<p>Nom : " . nl2br($nom) . "</p>";
        $message .= "<p>Email : " . nl2br($email) . "</p>";
        $message .= "<p>Téléphone : " . nl2br($telephone) . "</p>";
        $message .= "<p>Activité : " . nl2br($activite) . "</p>";
        $message .= "<p>TJM : " . nl2br($tjm) . "</p>";
        $message .= "<p>Compétences : " . nl2br($competences) . "</p>";
        $message .= "<p>Projet : " . nl2br($projet) . "</p>";
        $message .= "</body></html>";

        // Envoyer l'e-mail
        if (mail($to, "Formulaire de contact", $message, $headers)) {
            echo "Votre message a été envoyé avec succès.";
        } else {
            echo "Erreur : veuillez réessayer.";
        }
    } else {
        echo "Veuillez remplir tous les champs.";
    }
}
