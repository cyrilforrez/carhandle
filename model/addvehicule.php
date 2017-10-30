<?php
$req = $bdd->prepare('INSERT INTO vehicules (type, marque, model, prix, description)
VALUES(:type, :marque, :model, :prix, :description)');
$req->execute(array(
	'type' => $_POST['type'],
	'marque' => $_POST['marque'],
	'model' => $_POST['model'],
	'prix' => $_POST['prix'],
	'description' => $_POST['description']
	));
