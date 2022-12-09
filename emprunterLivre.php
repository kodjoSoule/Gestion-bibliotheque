<?php 
# Mini Projet Informatique Gestion de Bibliotheque
# By 
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
			 		<a class="btn btn-primary btn-lg" href="listeLivre.php"><span class="glyphicon glyphicon-chevron-left"></span >Retour</a>  
			 	</div>
				<div class="col-9 mx-auto panel panel-default ">
	  				<div class="panel-heading"><h3>Emprunter Livre</h3></div>
	  					<div class="panel-body">
	  					<?php
	  					if(isset($_GET["isbn"])){
	  						$isbn = $_GET["isbn"];
	  					}
	  					$datejour = getdate();
//recuperation des heure et minutes
$annee = $datejour["year"];
$mois = $datejour["mon"];
$jour = $datejour["mday"];
$datej = "$annee/$mois/$jour";
$datej2 = "$annee-$mois-$jour";
	  					?>


	  					<?php $succesEm = false ;?>
	  					<form class="ml-4" method="POST" action="#">
		  					<div class="row">
		  						<div class="col-6">
		  							<h3>Adherant</h3>
		  							<div class="form-group">
		  								<label>Nom</label>
		  								<input class="form-control col-4" type="text"  name="nomAd" required>
		  							</div>
		  							<div class="form-group">
		  								<label>Prenom</label>
		  								<input class="form-control col-4" type="text" name="prenomAd" required>
		  							</div>
		  							<div class="form-group">
		  								<label>Date de Naissance</label>
		  								<input class="form-control col-4" type="date" name="dateNaiss" required>
		  							</div>
		  							<div class="form-group">
		  								<label>Adresse</label>
		  								<input class="form-control col-4" type="text" name="adresseAd" required>
			  						</div>
			  						<div class="form-group">
		  								<label>Telephone : </label>
		  								<input class="form-control col-4" type="tel" pattern="^[0-9]{8}" name="telAd" required>
			  						</div>

		  						</div>
		  						<div class="col-6 m">
		  							<div class="form-group">
		  								<p><h3> Date debut</h3></p>
		  								<p class="form-control"> <?php echo $datej; ?> </p>
		  							</div>
		  							<div class="form-group">
		  								<label>A rendre le </label>
		  								<input type="date" class="form-control" name="dateFin" required>

		  							</div>
		  						</div>

		  					</div>
	  							<button type="submit" name="submit" class="btn btn-success col-5 ml-3">
	  							Ajouter</button>
	  					</form>
	  					<?php
	  						if( isset($_POST["nomAd"]) &&
	  							isset($_POST["prenomAd"]) &&
	  							isset($_POST["dateNaiss"]) &&
	  							isset($_POST["adresseAd"])&&
	  							isset($_POST["telAd"])&&
	  							isset($_POST["submit"]) )
	  							//isset($_POST["submit"])

	  						{
	  							
	  							$nomAd = $_POST["nomAd"] ;
								$prenomAd = $_POST["prenomAd"] ;
	  							$dateNaiss = $_POST["dateNaiss"] ;
	  							$adresseAd = $_POST["adresseAd"] ;
	  							$telAd = $_POST["telAd"];
	  							$login= $_SESSION['login'];
	  							$dateFin =$_POST["dateFin"];

	  							//$bdd->exec(" INSERT INTO livre (ISBN,ID_AUTEUR, TITRE_LIVRE, LANGUE_LIVRE, NBRE_EXPLAIRE_LIVRE)VALUES (22, 'titre 1', 'langue 2', 44) ");


	  							// $bdd->exec(" INSERT INTO adherant (NOM_ADHERANT, PRENOM_ADHERANT, ATE_NAISS_ADHERANT, ADRESSE_ADHERANT, TEL_ADHERANT) VALUES ('zzzz', 'eeee', 'eeee', 'eeee','hju'");
	  								/*INSERT INTO auteur ( NOM_AUTEUR, PRENOM_AUTEUR) VALUES ('$nomAu','$prenomAu')*/
$bdd->exec("INSERT INTO `gestionbibliotheque`.`adherant` (`ID_ADHERANT`, `NOM_ADHERANT`, `PRENOM_ADHERANT`, `ATE_NAISS_ADHERANT`, `ADRESSE_ADHERANT`, `TEL_ADHERANT`)
VALUES (NULL, '$nomAd', '  $prenomAd', '$dateNaiss', '$adresseAd', '$telAd'); ");
$id = "select MAX(ID_ADHERANT) FROM adherant";
$id2=$bdd->query($id);
$id3=$id2->fetch()[0];


$bdd->exec("INSERT INTO `gestionbibliotheque`.`emprunt` (`ID_EMPRUNT`, `ISBN`, `ID_ADHERANT`, `LOGIN_AD`, `DATE_DEBUT`, `DATE_FIN`, `NBRE_EMPRUNT`) VALUES (NULL, '$isbn', '$id3', '$login', '$datej2', '$dateFin', '1')");
$bdd->exec("UPDATE `livre` SET `NBRE_EXPLAIRE_LIVRE` = `NBRE_EXPLAIRE_LIVRE`-1 WHERE `livre`.`ISBN` = '$isbn' ");


// $bdd->exec("INSERT INTO `gestionbibliotheque`.`emprunt` (`ID_EMPRUNT`, `ISBN`, `ID_ADHERANT`, `LOGIN_AD`, `DATE_DEBUT`, `DATE_FIN`, `NBRE_EMPRUNT`) VALUES (NULL, '$isbn', '33', '$login', '2021-05-05', '2020-05-06', '2')");


	  							//$bdd->exec(" INSERT INTO auteur (ID_AUTEUR, NOM_AUTEUR, PRENOM_AUTEUR) VALUES (NULL,'$nomAu','$prenomAu') ");
				echo '<div class="text-center col-8 alert alert-success" style="margin-top: 100px">
										<h3><strong>Livre Emprunter avec Succes</strong></h3>
								</div> ';
					

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
</html>