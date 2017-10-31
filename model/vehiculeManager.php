<?php


$req = $bdd->prepare('INSERT INTO vehicules (type, marque, model, prix, description)
VALUES(:type, :marque, :model, :prix, :description)');
$req->execute(array(
    'type' => $type,
    'marque' => $marque,
    'model' => $model,
    'prix' => $prix,
    'description' => $description
    ));
