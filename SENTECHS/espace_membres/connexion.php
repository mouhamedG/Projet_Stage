<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/00af2a20e0.js" crossorigin="anonymous"></script>
    <title>Connexion</title>
    <style>
        .body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            font-size: 16px;
            color: #fff;
            background-color: #e8e8e8;
        }

        .FormInscrs {
            width: 350px;
            height: 500px;
            background-color: #131313;
            position: absolute;
            margin: auto;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 30px;
            border-radius: 5px;
            border-top: 5px solid #46cb49;
            border-bottom: 5px solid #46cb49;
            box-shadow: 0 0 10px #000;
        }

        .form-text {
            font-size: 32px;
            font-weight: 600;
            text-align: center;
            padding-bottom: 30px;
        }

        .form-saisie input {
            width: 92%;
            font-size: 16px;
            outline: none;
            background-color: #1f1f22;
            color: #fff;
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #fff;
            border-radius: 8px;
        }

        .form-saisie label {
            font-size: 14px;
            font-weight: bold;
        }

        .form-saisie {
            width: 100%;
            font-size: 16px;
            outline: none;
            background-color: #131313;
            color: #fff;
            margin: 10px 0;
            padding: 10px;
        }

        .form-saisie input[type="submit"].btnInscris {
            width: 100%;
            font-size: 18px;
            background-color: #46cb49;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            margin-bottom: 0;
        }

        .form-saisie input[type="submit"].btnInscris:hover {
            background-color: #58cb5a;
            color: #ececf0;
        }

        .form-saisie a {
            font-size: 14px;
            font-weight: bold;
            color: #1d4adb;
        }

        .errorMessage {
            color: red;
        }
    </style>
</head>

<body class="body">
    <div class="FormInscrs">
        <div class="form-text">Connexion</div>
        <div class="form-saisie">
            <form method="post" action="connexion_process.php" class="login-form">
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" name="pseudo" placeholder="Pseudo" required>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required>
                <input type="submit" value="Se connecter" class="btnInscris">
            </form>
            <p>Pas encore membre ? <a href="inscription.php">Inscrivez-vous</a></p>
        </div>
    </div>
</body>

</html>