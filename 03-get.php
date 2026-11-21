<?php
$nom = $_GET["nom"] ?? "Invité";
$ville = $_GET["ville"] ?? "Inconnue";
?>
<!DOCTYPE html>
<html>
<head><title>GET avec PHP</title></head>
<body>
<h1>Exemple avec GET</h1>
<p>Bonjour <?php echo $nom; ?></p>
<p>Vous habitez à <?php echo $ville; ?>.</p>
</body>
</html>