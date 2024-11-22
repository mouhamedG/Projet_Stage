<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css" />
    <title>Résultat du Calcul</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
</head>

<body>
    <h1 class="yy">Résultat du Calcul de Revenu Net en Portage Salarial</h1><br><br><br>
    <?php
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Récupérer les valeurs du formulaire
        $taux_journalier = intval($_POST["taux_journalier"]);
        $jours_travailles = intval($_POST["jours_travailles"]);
        $mois = intval($_POST["mois"]);
        $frais_par_jour = intval($_POST["frais_par_jour"]);

        // Calcul du revenu brut
        $revenu_brut = $taux_journalier * $jours_travailles * $mois;

        // Calcul des cotisations et frais de gestion
        $cotisations_patronales = $revenu_brut * 0.32;
        $cotisations_salariales = $revenu_brut * 0.13;
        $frais_gestion = $revenu_brut * 0.05;
        $frais_par_jour = $mois * $frais_par_jour;

        // Calcul du revenu net optimisé
        $revenu_net_optimise = $revenu_brut - $cotisations_patronales - $cotisations_salariales - $frais_gestion - ($frais_par_jour * $mois);

        // Afficher les résultats
        echo "<p class='xx'>Nombre de mois : " . $mois . "</p>";
        echo "<p class='xx'>Revenu brut : " . $revenu_brut . " euros</p>";
        echo "<p class='xx'>Cotisations patronales (32%) : " . $cotisations_patronales . " euros</p>";
        echo "<p class='xx'>Cotisations salariales (13%) : " . $cotisations_salariales . " euros</p>";
        echo "<p class='xx'>Frais de gestion (5%) : " . $frais_gestion . " euros</p>";
        echo "<p class='xx'>Revenu net optimisé : " . $revenu_net_optimise . " euros</p>";
    }
    ?>

    <div id="chart_div" style="width: 900px; height: 500px; margin-left: 650px;"></div>

    <script>
        // Charger le module de visualisation et dessiner un diagramme à secteurs
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Type de revenu', 'Montant'],
                ['Revenu net', <?php echo isset($revenu_net_optimise) ? $revenu_net_optimise : 0; ?>],
                ['Cotisations patronales', <?php echo isset($cotisations_patronales) ? $cotisations_patronales : 0; ?>],
                ['Cotisations salariales', <?php echo isset($cotisations_salariales) ? $cotisations_salariales : 0; ?>],
                ['Frais de gestion', <?php echo isset($frais_gestion) ? $frais_gestion : 0; ?>]
            ]);

            var options = {
                title: 'Ventilation du Chiffre d\'Affaires',
                is3D: true,
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

            chart.draw(data, options);

        }
    </script>
    <footer class="footer" style="display: flex; justify-content: space-between; align-items: center;">
        <div class="footer-logo">
            <strong>
                <p style="font-size: 60px; margin-left: 50px;">SENTECHS</p>
            </strong>
            <ul style="list-style: none; padding: 0; margin-left: 50px;">
                <li style="margin: 5px 0;"><a href="./where.html">Nous trouver</a></li>
                <li style="margin: 5px 0;"><a href="./contact.php">Contact</a></li>
                <li style="margin: 5px 0;"><a href="./simulation_portage_salarial.html">Simulation Portage Salarial</a></li>
                <li style="margin: 5px 0;"><a href="./portage_salarial.html">Portage salarial</a></li>
            </ul>
        </div>
        <div class="footer-label">
            <strong>
                <p style="margin-left: 10px; font-size: 30px">Label <br>du portage salarial</p>
            </strong><br>
            <img src="image/LOGO-LABEL-PEPS-RVB-300x278.png" alt="Logo PEPS" style="max-width: 100%; height: 150px;">
        </div>
        <div class="social-icons">
            <strong>
                <p style="margin-right: 50px;">Réseaux sociaux</p>
            </strong><br>
            <i class="fa-brands fa-square-facebook" style="margin-right: 10px;"></i>
            <i class="fa-brands fa-square-twitter" style="margin-right: 10px;"></i>
            <i class="fa-brands fa-square-instagram" style="margin-right: 10px;"></i>
            <i class="fa-brands fa-linkedin"></i>
        </div>
    </footer>
</body>

</html>