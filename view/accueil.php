<?php
require ('includes/head.php');
require ('includes/header.php');
 ?>

    <table class="highlight bordered responsive-table" >
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
            <td>Alvin</td>
            <td>Eclair</td>
            <td>$0.87</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>$3.76</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>$7.00</td>
          </tr>
        </tbody>
      </table>


<a class="waves-effect waves-light btn">Voir</a>

<a class="waves-effect waves-light btn modal-trigger" href="#modal1">Ajouter</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

<a class="waves-effect waves-light btn">supprimer</a>


<?php
require ('includes/foot.php');
require ('includes/footer.php');
 ?>
