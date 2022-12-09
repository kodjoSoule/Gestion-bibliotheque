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
	  				<div class="panel-heading"><h3>Listes des adherant</h3></div>
	  				<?php
	  					$reqlistadherant = "SELECT * FROM adherant" ;
						$listeadherant = $bdd->query($reqlistadherant);
	  				?>
	  				<div class="panel-body">
	  					<table class="table">
	  						<thead>
	  							<th>ID</th>
	  							<th>Nom</th>
	  							<th>Prenom</th>
	  							<th>Date naissance</th>
	  							<th>Adresse</th>
	  							<th>Tel</th>
	  						</thead>
	  						<tbody>
	  							<?php while($donnee = $listeadherant->fetch()){?>
	  							<tr>
	  								<td> <?php echo $donnee["ID_ADHERANT"];?></td>
	  								<td> <?php echo $donnee["NOM_ADHERANT"]; ?></td>
	  								<td> <?php echo $donnee["PRENOM_ADHERANT"]; ?></td>
	  								<td> <?php echo $donnee["ATE_NAISS_ADHERANT"]; ?></td>
	  								<td> <?php echo $donnee["ADRESSE_ADHERANT"]; ?></td>
	  								<td> <?php echo $donnee["TEL_ADHERANT"]; ?></td>
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
<?php include("footer.php");?>
</body>
</html



