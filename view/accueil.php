<?php
require ('includes/head.php');
require ('includes/header.php');
 ?>

    <table class="highlight bordered responsive-table" id="tableau" >
        <thead>
          <tr>
              <th>Type</th>
              <th>Marque</th>
              <th>Modele</th>
              <th>Prix</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>camion</td>
            <td>scania</td>
            <td>...</td>
            <td>40,000e</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td></td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td></td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>

<div id="divboutton">
  <a class="waves-effect waves-light btn deep-orange darken-3">Voir</a>
  <a class="waves-effect waves-light btn modal-trigger deep-orange darken-3" href="#modal1">Ajouter</a>
  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="camion, voiture, moto" id="type" type="text" class="validate">
          <label for="type">Type</label>
        </div>
        <div class="input-field col s12">
          <input placeholder="scania, audi, ducati" id="marque" type="text" class="validate">
          <label for="marque">Marque</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="A3, 899" id="modele" type="text" class="validate">
          <label for="modele">Modele</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input placeholder="20 000" id="prix" type="text" class="validate">
          <label for="prix">Pirx</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea placeholder="Etat du véhicule etc..." id="description" class="materialize-textarea"></textarea>
          <label for="description">Description</label>
        </div>
      </div>
    </form>
  </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>
  <a class="waves-effect waves-light btn deep-orange darken-3">supprimer</a>
</div>


<?php
require ('includes/foot.php');
require ('includes/footer.php');
 ?>
