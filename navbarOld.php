
    <div style="height: 50px;">
      <div class="col-12">
          <h1 class="text-secondary  mt-1 text-right">Bibliotheque TOHO</h1>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Gestion de Bibliotheque</a><br>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active btn btn-primary" href="#" style="width: 100px">Accuiel</a>
            </li>
            <li class="nav-item ml-3">
              <a class="nav-link btn btn-lg btn-success " href="#">Gestion des Entrées</a>
            </li>
            <li class="nav-item ml-3">
              <a class="nav-link btn btn-warning " href="#">Gestion des Sorties</a>
            </li>
          </ul>
          <div class="text-right">
            <strong>
              <?php echo $_SESSION['nom']. ' '. $_SESSION['prenom'];?> <span class="glyphicon glyphicon-user text-success"></span>
            </strong>
            <br><br>
            <a class="nav-link btn btn-primary btn-sm" href="page/deconnexion.php">
            Deconnecter  <span class="glyphicon glyphicon-log-out "></span>
          </a>
          </div>
        </div>
      </div>
    </nav>