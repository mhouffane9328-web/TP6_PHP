<?php require_once "../database/connexion.php"; $pdo->prepare("DELETE FROM modules WHERE id_module=?")->execute([$_GET['id']]); header("Location:index.php");
