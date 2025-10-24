<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// verif sousmission formulaire
if (!isset($_POST['email'], $_POST['pwd'], $_POST['pwd2'], $_POST['birth'])) {
    // Si non, on redirige vers la page d'inscription
    header("Location: register.php");
    exit;
}


// Récup les données
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$pwd2 = $_POST['pwd2'];
$birth = $_POST['birth'];

// Tableau pour stocker les erreurs
$errors = [];

// Vérif la longueur du mdp
if (strlen($pwd) < 8) {
    $errors[] = 'len';
}

// Vérif maj / min / que ce ne soit pas que des chiffres
$hasUpper = false;
$hasLower = false;
$hasDigit = false;
$hasLetter = false;

// Boucle sur chaque caractère du mdp
for ($i = 0; $i < strlen($pwd); $i++) {
    $char = $pwd[$i];

    if (ctype_upper($char)) {
        $hasUpper = true;
        $hasLetter = true;
    } elseif (ctype_lower($char)) {
        $hasLower = true;
        $hasLetter = true;
    } elseif (ctype_digit($char)) {
        $hasDigit = true;
    }
}

// Si pas de maj ou pas de min ou uniquement chiffres erreur
if (!$hasUpper || !$hasLower || (!$hasLetter && $hasDigit)) {
    $errors[] = 'case';
}

// Vérif si les deux mdp correspondent
if (strcmp($pwd, $pwd2) !== 0) {
    $errors[] = 'match';
}

// S'il y a des erreurs redirection vers register.php avec les codes d'erreur
if (!empty($errors)) {
    $query = implode('&', array_map(fn($e) => "error[]=$e", $errors));
    header("Location: register.php?$query");
    exit;
}

// Si tout est bon afficher message de bienvenue
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Successful</title>
</head>

<body>
    <h1>Thank you for registering</h1>
    <p>Your account is created:</p>
    <ul>
        <li>Email address: <?= htmlspecialchars($email) ?></li>
        <li>Birth date: <?= htmlspecialchars($birth) ?></li>
    </ul>
</body>

</html>