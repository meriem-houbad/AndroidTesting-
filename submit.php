<?php
try
{// On se connecte a MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=scolarite;charset=utf8', 'root', '');
}
catch(Exception $e)
{// En cas d'erreur, on affiche un message et on arrete tout
        die('Erreur : '.$e->getMessage());
} // Si tout va bien, on peut continuer

$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$age = $_POST["age"];

$req = $bdd->prepare('INSERT INTO Etudiant(nom, prenom, age) VALUES(:nom, :prenom, :age)');
$req->execute(array('nom' => $nom,'prenom' => $prenom,'age' => $age));
echo 'L’etudiant a bien ete ajoute !';

?>