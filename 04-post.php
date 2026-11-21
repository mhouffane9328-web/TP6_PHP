<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Formulaire POST</title>
</head>
<body>
    <h1>Formulaire d'inscription</h1>

    <form method="POST">
        Nom : <input type="text" name="nom" required><br><br>
        Email : <input type="email" name="email" required><br><br>
        Âge : <input type="number" name="age" min="1" required><br><br>
        Message : <br><textarea name="message" rows="4" cols="40"></textarea><br><br>
        <button type="submit">Envoyer</button>
    </form>

    <?php
    if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["age"])) {
        $nom = $_POST["nom"];
        $email = $_POST["email"];
        $age = $_POST["age"];
        $message = $_POST["message"];

        echo "<hr>";
        echo "<h2>Données reçues par PHP</h2>";
        echo "<p>Nom : " . htmlspecialchars($nom) . "</p>";
        echo "<p>Email : " . htmlspecialchars($email) . "</p>";
        echo "<p>Âge : " . htmlspecialchars($age) . "</p>";
        echo "<p>Message : " . htmlspecialchars($message) . "</p>";
    }
    ?>
</body>
</html>