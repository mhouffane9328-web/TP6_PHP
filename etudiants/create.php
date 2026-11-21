<?php
include "../database/db.php";
if($_POST){
 $conn->query("INSERT INTO etudiants (nom,email,id_formation) VALUES ('".$_POST['nom']."','".$_POST['email']."',".$_POST['id_formation'].")");
 header("Location:index.php"); exit;
}
$forms=$conn->query("SELECT * FROM formations");
?>
<form method="post">
Nom: <input name="nom" required><br><br>
Email: <input name="email" required><br><br>
Formation: <select name="id_formation"><?php while($f=$forms->fetch_assoc()){ echo "<option value='".$f['id_formation']."'>".$f['nom_formation']."</option>"; }?></select><br><br>
<button>Ajouter</button>
</form>