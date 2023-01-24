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
		 <div class="container-fluid " style="height:100%;background-image: url('img/im1.jpg');background-size: cover;">
		 	<div class="row">
			 	<div class="col-1 mt-5">
			 		<a class="btn btn-primary btn-lg" href="gestionSortie.php"><span class="glyphicon glyphicon-chevron-left"></span >Retour</a>  
			 	</div>
				<div class="col-10 mx-auto panel panel-default ">
	  				<div class="panel-heading"><h3>Livre preter</h3></div>
	  				<?php
	  					//$reqlistLivre = "SELECT * FROM livre WHERE ISBN = 97822 " ;
						//$listeLivre = $bdd->query($reqlistLivre);
						//eegr
						//$reqlistadherant = "SELECT * FROM adherant" ;
						//$listeadherant = $bdd->query($reqlistadherant);

						//Livre Emprunter
						$reqListeEmprunter = "SELECT * FROM emprunt where deposer = 0 " ;
						$listeEmprunt = $bdd->query($reqListeEmprunter); 

	  				?>
	  				<div class="panel-body">
	  					<table class="table">
	  						<thead>
	  							<th>ID Livre</th>
	  							<th>Titre Livre</th>
	  							<th>Nom et Prenom Adherant</th>
	  							<th>Date Emprunt</th>
	  							<th>Remettre Avant </th>
	  						</thead>
	  						<tbody>
	  							<?php while($donnee = $listeEmprunt->fetch() ){
	  								//on recupere le titre du livre
	  								$ttr=$donnee["ISBN"];
	  								print_r($ttr);
	  								$reqTitreA= "SELECT TITRE_LIVRE FROM livre WHERE ISBN=$ttr" ;
	  								$titreA= $bdd->query($reqTitreA); 
	  								
	  								//on recupere le nom et le prenom de celui qui a emprunté
	  								$ad=$donnee["ID_ADHERANT"];
	  								$reqAd= "SELECT NOM_ADHERANT,PRENOM_ADHERANT FROM adherant WHERE ID_ADHERANT= $ad" ;
	  								$adhe= $bdd->query($reqAd); 
	  								$adheNP=$adhe->fetch();
	  								//print_r($adheNP);
	  								?>
	  							<tr>
	  						<td> <?php echo $donnee["ISBN"];?></td>
	  						<td> <?php echo $titreA->fetch()[0]; ?></td>
	  						<td> <?php echo $adheNP[0] ." ".$adheNP[1] ;?></td>
	  						<td> <?php echo $donnee["DATE_DEBUT"] ; ?></td>
	  						<td> <?php echo $donnee["DATE_FIN"]; ?></td>
	  									<td>
	  									<a class="btn btn-primary" 
	  									href="deposerSucces.php
	  									?isbn=<?php echo $donnee["ISBN"]; ?>
	  									">Deposer</a>
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
<?php include("footer.php");?>
</body>
</html



