<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    if ($enteredUsername === $config['username'] && $enteredPassword === $config['password']) {
        session_start();
        $_SESSION['authenticated'] = true;
        header("Location: page.php"); // Rediriger vers la page protégée
        exit();
    } else {
        echo "Identifiants incorrects. Veuillez réessayer.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Authentification</title><style>
        body {
            background-color: #000;
            color: #00FF00;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #FF0000;
        }
        p {
            color: #FFFF00;
        }
        a {
            color: #00FFFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="page_protected.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" name="username" required><br>
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required><br>
        <button type="submit">Se connecter</button>
    </form>
</body>
</html>