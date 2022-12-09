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
			 		<a class="btn btn-primary btn-lg" href="gestionEntre.php"><span class="glyphicon glyphicon-chevron-left"></span >Retour</a>  
			 	</div>
				<div class="col-9 mx-auto panel panel-default ">
	  				<div class="panel-heading"><h3>Livre Rendue</h3></div>
	  				<?php
	  					//$reqlistLivre = "SELECT * FROM livre WHERE deposer= 1 " ;
						//$listeLivre = $bdd->query($reqlistLivre);
						//eegr
						//$reqlistadherant = "SELECT * FROM adherant" ;
						//$listeadherant = $bdd->query($reqlistadherant);
	  				?>
	  				<div class="panel-body">
	  					<table class="table">
	  						<thead>
	  							<th>ID</th>
	  							<th>Titre Livre</th>
	  							<th>Nom et Prenom Adherant</th>
	  							<th>Date Emprunt</th>
	  							<th>Date Rendue</th>
	  						</thead>
	  						<tbody>
	  							<?php $lrend=$bdd->query(" SELECT * FROM emprunt WHERE deposer=1");

	  							while($lrend2=$lrend->fetch()){?>
	  							<tr>
	  								<?php
	  								 $isbn1 = $lrend2["ISBN"] ;
									$nP=$bdd->query(" SELECT NOM_ADHERANT,PRENOM_ADHERANT FROM Adherant WHERE ID_ADHERANT= '$lrend2[2]'");
									$np2=$nP->fetch();
									//
									$ttl=$bdd->query(" SELECT TITRE_LIVRE FROM livre WHERE ISBN= '$isbn1'");
									$ttl2=$ttl->fetch();
									//
									$datejour = getdate();
//recuperation des heure et minutes
$annee = $datejour["year"];
$mois = $datejour["mon"];
$jour = $datejour["mday"]; 
				$datej = "$annee-$mois-$jour" ;
	  								 ?>
	  								<td> <?php echo $isbn1;?></td>
	  								<td> <?php echo $ttl2[0]; ?></td>
	  								<td> <?php echo $np2[0] ." ".$np2[1] ; ?></td>
	  								<td><?php echo $lrend2[4]; ?></td>
	  								<td><?php echo $lrend2[5]; ?></td>

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



