<?php 
# Mini Projet Informatique Gestion de Bibliotheque
# Kodjo Soueymane
# Ousmane Djiguiba
# GIT
#L3S6
	session_start();
	$title = "Gestion Bibliothèque" ;
	
	require('connexion.php');
	
	global $bdd ;

?>
<!DOCTYPE html>
<html>
<?php
	require('head.php');
?>
<body>
	<?php include("navbar.php");
		 #include("menu.php");
	?>	
		<div class="container-fluid " style="height: 100%;background-image: url('img/im1.jpg');background-size: cover;">
		 	<div class="row">
			 	<div class="col-1 mt-5">
			 		<a class="btn btn-primary btn-lg" href="gestionEntre.php"><span class="glyphicon glyphicon-chevron-left"></span >Retour</a>  
			 	</div>
				<div class="col-9 mx-auto panel panel-default ">
	  				<div class="panel-heading"><h3>Ajouter Livre</h3></div>
	  					<div class="panel-body">
	  					
	  					<form class="ml-4" method="POST" action="#">
		  					<div class="row">
		  						<div class="col-6">
		  							<h3>Livre</h3>
		  							<div class="form-group">
		  								<label>ISBN</label>
		  								<input class="form-control col-4" type="number" min="5" name="isbn" required>
		  							</div>
		  							<div class="form-group">
		  								<label>Titre</label>
		  								<input class="form-control col-4" type="text" name="titre" required>
		  							</div>
		  							<div class="form-group">
		  								<label>Langue</label>
		  								<input class="form-control col-4" type="text" name="langue" required>
		  							</div>
		  							<div class="form-group">
		  								<label>Nombre exemplaire</label>
		  								<input class="form-control col-4" type="number" min="1" name="exemplaire" required>
			  						</div>

		  						</div>
		  						
		  						<!--PArtie Auteur-->
		  						<div class="col-6">
		  							<h3>Auteur</h3>
		  							<div class="form-group">
		  								<label>Nom</label>
		  								<input class="form-control col-4" type="text" name="nomAu" required>
		  							</div>
		  							<div class="form-group">
		  								<label>Prenom</label>
		  								<input class="form-control col-4" type="text" name="prenomAu" required>
		  							</div>
		  						</div>
		  					</div>
	  							<button type="submit" name="submit" class="btn btn-success col-5 ml-3">
	  							Ajouter</button>
	  					</form>
	  					<?php
	  						if( isset($_POST["isbn"]) &&
	  							isset($_POST["titre"]) &&
	  							isset($_POST["langue"]) &&
	  							isset($_POST["exemplaire"]) &&
	  							isset($_POST["prenomAu"]) &&
	  							isset($_POST["nomAu"]) &&
	  							isset($_POST["submit"]))
	  						{
	  							$isbn = $_POST["isbn"] ;
	  							$titre = $_POST["titre"];
	  							$langue = $_POST["langue"];
	  							$exemplaire = $_POST["exemplaire"];
	  							$prenomAu = $_POST["prenomAu"] ;
	  							$nomAu = $_POST["nomAu"] ;
	  							

	  							//$bdd->exec(" INSERT INTO livre (ISBN,ID_AUTEUR, TITRE_LIVRE, LANGUE_LIVRE, NBRE_EXPLAIRE_LIVRE)VALUES (22, 'titre 1', 'langue 2', 44) ");

	  							$bdd->exec(" INSERT INTO livre (ISBN, TITRE_LIVRE, LANGUE_LIVRE, NBRE_EXPLAIRE_LIVRE)VALUES ($isbn, '$titre', '$langue', $exemplaire);
	  								INSERT INTO auteur ( NOM_AUTEUR, PRENOM_AUTEUR) VALUES ('$nomAu','$prenomAu')

	  								");


	  							//$bdd->exec(" INSERT INTO auteur (ID_AUTEUR, NOM_AUTEUR, PRENOM_AUTEUR) VALUES (NULL,'$nomAu','$prenomAu') ");
	  							
	  						}
	  					?>

	  					</div>
					</div>
				</div>
			</div>	 
	
			</div>
		</div>	
<?php include("footer.php");?>
</body>
</html



