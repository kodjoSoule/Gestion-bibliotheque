
    <div style="height: 50px;">
      <div class="col-12">
          <h1 class="text-secondary  mt-1 text-right">Bibliotheque TOHO</h1>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="opacity: 0.8">
      <a class="navbar-brand" href="#">Gestion de Bibliotheque</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ml-3 mt-sm-2">
            <a class="nav-link btn btn-light rounded" href="accueil.php" style="color : gray ; opacity: 0.9;">
            Accueil <span class="glyphicon glyphicon-home"></span>  </a>
          </li>
          <li class="nav-item ml-3 mt-sm-2">
            <a class="nav-link btn btn-light rounded" href="gestionEntre.php" style="opacity: 0.9;">Gestion des Entrées <span class="glyphicon"></span></a>
          </li>
          <li class="nav-item ml-3 mt-sm-2">
            <a class="nav-link btn btn-light rounded" href="gestionSortie" style="opacity: 0.9;">Gestion des Sorties</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li> -->
        </ul>

         <div class="text-xs-light text-md-right">
            <strong>
              <?php echo $_SESSION['nom']. ' '. $_SESSION['prenom'];?> <span class="glyphicon glyphicon-user text-success"></span>
            </strong>
            <br><br>
            <a class="nav-link btn btn-primary btn-sm" href="deconnexion.php">
              Deconnecter  <span class="glyphicon glyphicon-log-out "></span>
            </a>
          </div>

        </div>
    </nav>
<script type="text/javascript">
  
</script>
