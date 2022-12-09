# Mini Projet Informatique Gestion de Bibliotheque
# Kodjo Soueymane
# Ousmane Djiguiba
# GIT
#L3S6
<?php 
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
			 		<a class="btn btn-primary btn-lg" href="accueil.php"><span class="glyphicon glyphicon-chevron-left"></span >Retour</a> 
			 	</div>
				<div class="col-9 mx-auto panel panel-default ">
	  				<div class="panel-heading"><h3>Listes des livres</h3></div>
	  				<?php
	  					$reqlistLivre = "SELECT * FROM livre" ;
						$listeLivre = $bdd->query($reqlistLivre);

	  				?>
	  				<div class="panel-body">
	  					<table class="table">
	  						<thead>
	  							<th>ID</th>
	  							<th>Auteur</th>
	  							<th>Titre Livre</th>
	  							<th>Langue</th>
	  							<th>Examplaire</th>
	  							<th></th>
	  						</thead>
	  						<tbody>
	  							<?php while($donnee = $listeLivre->fetch()){
	  							$reqAu = "SELECT NOM_AUTEUR,PRENOM_AUTEUR FROM Auteur where ID_AUTEUR=$donnee[1]" ;
	  							$reqAu2=$bdd->query($reqAu);
	  							$aI=$reqAu2->fetch();
	  							$au=$aI[0]." ".$aI[1];
?>
	  							<tr>
	  								<td> <?php echo $donnee["ISBN"];?></td>
	  								<td> <?php echo $au; ?></td>
	  								<td> <?php echo $donnee["TITRE_LIVRE"]; ?></td>
	  								<td> <?php echo $donnee["LANGUE_LIVRE"]; ?></td>
	  								<td> <?php echo $donnee["NBRE_EXPLAIRE_LIVRE"]; ?></td>
	  								<td>
	  									<?php
	  										$_SESSION["isbn"] = $donnee["ISBN"];
	  									?>
	  									<a class="btn btn-primary" 
	  									href="emprunterLivre.php
	  									?isbn=<?php echo $donnee["ISBN"] ; ?>
	  									">
	  										Emprunter
	  									</a>
	  								</td>
	  								<td>
	  									<a class="btn btn-primary" 
	  									href="AjouterExemplaire.php
	  									?isbn=<?php echo $donnee["ISBN"];?>
	  									">Ajouter Exemplaire</a>
	  								</td>
	  							</tr>
	  							<?php } ?>
	  						</tbody>
	  					</table>
	  				</div>
				</div>
			</div>
		</div>	 
	
	</div>
	
</div>	
<?php include("footer.php"); ?>

</body>
</html



