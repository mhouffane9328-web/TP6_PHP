<?php require_once "../database/connexion.php"; $pdo->prepare("DELETE FROM formations WHERE id_formation=?")->execute([$_GET['id']]); header("Location:index.php");
