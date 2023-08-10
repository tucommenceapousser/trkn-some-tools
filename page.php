<?php
session_start();

if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Techniques de Sécurité Informatique</title>
    <style>
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
    <div class="container">
        <h1>Exploration de Techniques de Sécurité Informatique</h1>
        <p>Apprenez-en davantage sur les techniques de dorking, SQLi et d'autres concepts de sécurité informatique:</p>
        <ul>
            <li><a href="https://sanaetrkn.trhacknonrainbowhat.repl.co/">Sanae - Outil de Dorking</a></li>
<p>Utilisez notre bot Telegram pour obtenir le mot de passe de l'interface web sécurisée:</p> <li><a href="https://websqli-findx.mariedelaclaire.repl.co/">Trhacknon SQLi Web Exploiter - SQL Injection</a> (Veuillez utiliser les modes de démonstration pour des exemples sécurisés)</li>
            <li><a href="http://websqli-findit.mariedelaclaire.repl.co/">Hacker Interface - Gau + Findit</a></li>
        </ul>
        <ul>
            <li><a href="https://t.me/lfihuntBot">Bot Telegram LFI Hunt</a></li>
        </ul>
        <p>** Modes de Démonstration : Les liens vers Trhacknon SQLi Web Exploiter sont fournis à des fins éducatives uniquement. Veuillez ne pas utiliser pour des activités malveillantes.</p>        <li><a href="https://trknencoder-1-z8084287.deta.app/" target="_blank">Trhacknon Encoder - Outil d'Encodage</a></li>
            <p>Encodez vos mots de passe en utilisant cinq méthodes différentes pour renforcer leur sécurité:</p>
            <ul>
                <li><strong>Argon2:</strong> Utilise un algorithme de hachage sécurisé.</li>
                <li><strong>PBKDF2:</strong> Dérive une clé à partir d'un mot de passe.</li>
                <li><strong>Scrypt:</strong> Applique une fonction de hachage pour sécuriser.</li>
                <li><strong>XOR:</strong> Applique un chiffrement XOR.</li>
                <li><strong>AES-256:</strong> Utilise un chiffrement symétrique.</li>
            </ul>       <li><a href="https://trknxor-1-b8859385.deta.app/" target="_blank">trhacknon XOR encode Web Interface</a></li>
            <p>What is XOR encoding? XOR encoding is a simple bitwise operation that can be used to obfuscate data, including PHP webshells. It's useful for evading simple pattern matching techniques used by security tools. By encoding a webshell using XOR, it becomes harder for security tools to detect it based on known signatures.</p> <ul>
                <li><strong>encode webshell in xor</strong> </li></ul> 
      <li><a href="http://php-fbguard.mariedelaclaire.repl.co">Facebook Profile Guard (Web)</a> - Protégez votre profil Facebook contre les menaces potentielles.</li>
            <li><a href="https://replit.com/@MarieDelaclaire/FbProfileGuardian">Facebook Profile Guard (CLI)</a> - Utilisez la version en ligne de commande pour renforcer la sécurité de votre profil.</li>
      <li><a href="https://replit.com/@MarieDelaclaire/trknhacktools">multi tools 5 in 1</a> - some tools of exploitation and recon.</li><li><a href="https://replit.com/@MarieDelaclaire/bypassmagicbytes">magic bytes shell upload bypass</a> - magic bytes shell upload bypass</li>
            
    </div>
  <center><img src="trknn.svg"></center>
  </body>
</html>