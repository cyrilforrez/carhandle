<?php
require('model/connexion_sql.php'); // apel de connexion plus model
require('model/addvehicule.php');

if (isset($_POST["type"]) and isset($_POST["marque"]) and isset($_POST["model"]) and
isset($_POST["prix"]) and isset($_POST["description"])) {

}  //si ya du post pour creer
  // if marque
    //new objet
    //enregistre
    //redirige ver index
// si ya du post pour effacer
  //if delete
    // chercher db la ligne et l efaccer
    // header

//dans tout les cas
//recupere les vehicules et les affiche -> $vehicules

require('view/accueil.php');
