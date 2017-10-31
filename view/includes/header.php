<header>
  <div class="tittle grey darken-3">
    <a href="#" id="Tittle" class="white-text">OccazOxa</a> <br>
  </div>
  <nav id="changecolor">
     <div class="nav-wrapper grey darken-3">
       <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
       <ul class="left hide-on-med-and-down" id="nav">
         <li class="deep-orange darken-3" id="home"><a href="controler/accueil.php">Home</a></li>
         <li class="deep-orange darken-3" id="ajout"><a class="modal-trigger deep-orange darken-3" href="#modal1">Ajouter</a>
         <!-- Modal Structure -->
         <div id="modal1" class="modal">
           <div class="modal-content">
             <div class="row">
           <form class="col s12" method="post" action=" controler/accueil.php">
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
             <div class="row">
               <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit">Submit
                </button>
              </div>
            </div>
           </form>
         </div>
           </div>
         </div></li>
       </ul>
       <!--################ Menu burger ########################-->
       <ul class="side-nav" id="mobile-demo">
         <li class="deep-orange darken-3"><a href="accueil.php">Home</a></li>
         <li class="deep-orange darken-3"><a class="modal-trigger deep-orange darken-3" href="#modal1">Ajouter</a>
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
             <div class="row">
               <div class="input-field col s12">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                </button>
              </div>
            </div>
           </form>
         </div>
           </div>
         </div></li>
       </ul>
     </div>
   </nav>
</header>
