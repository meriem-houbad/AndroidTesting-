<?php
try
{// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=scolarite;charset=utf8', 'root', '');
}
catch(Exception $e)
{// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
} // Si tout va bien, on peut continuer
$reponse = $bdd->query('SELECT *  From Etudiant'); // On récupère tout le contenu de la table Etudiant
?>

<table border="10">


	<tr >
		<td style="background-color:red"> id :  </td> 
		<td style="background-color:red"> prenom </td>
        <td style="background-color:red"> nom </td>
        <td style="background-color:red"> age : </td>
	</tr>
    <?php
while ($donnees = $reponse->fetch()) // On affiche chaque entrée une à une
{
?>
    <tr>
		<td><?php echo $donnees['id']; ?></td> <!– Données du tableau-->
		<td><?php echo $donnees['nom']; ?></td>
        <td><?php echo $donnees['prenom']; ?></td>
        <td><?php echo $donnees['age']; ?></td>
	</tr>


<?php
}


$reponse->closeCursor(); // Termine le traitement de la requête
?>
</table>
<br><br>
<form method="POST" action="submit.PHP">
    <div>
	<td>  <label for="nom">nom : </label>
        <input type="text" id="nom" name="nom" required>
		</td>
    </div>
    <div>
	<td>
        <label for="prenom">prenom : </label>
        <input type="text" id="prenom" name="prenom" required>
		</td>
    </div>
	<div>
	<td>
<label for="nom">age : </label>
<input type="text" id="age" name="age" required>
</td>
</div>
<input type="submit"  value="ajouter" name="submit" id="login">
</form>



