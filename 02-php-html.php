<?php
$nom = "Sara";
$age = 21;
$ville = "Marrakech";
?>
<!DOCTYPE html>
<html>
<head><title>Mon profil</title></head>
<body>
<h1>Mon profil</h1>
<h2>Bienvenue sur ma page personnelle</h2>
<p>Bonjour <?php echo $nom; ?></p>
<p>Vous avez <?php echo $age; ?> ans.</p>
<p>J'habite à <?php echo $ville; ?>.</p>
</body>
</html>