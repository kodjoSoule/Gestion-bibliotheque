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
		<?php
			if(isset($_GET["isbn"])){
	  		$isbn = $_GET["isbn"];
	  		}
			
	  	?>
		 <div class="container-fluid " style="height:100%; background-image: url('img/im1.jpg');background-size: cover;">
		 	<div class="row">
			 	<div class="col-1 mt-5">
			 		<a class="btn btn-primary btn-lg" href="livrePreter.php"><span class="glyphicon glyphicon-chevron-left"></span >Retour</a> 
			 	</div>
				<div class="col-9 mx-auto panel panel-default ">
	  				<div class="panel-heading"><h3>Depot des livres</h3></div>
	  				<?php
$datejour = getdate();
//recuperation des heure et minutes
$annee = $datejour["year"];
$mois = $datejour["mon"];
$jour = $datejour["mday"]; 
				$datej = "$annee-$mois-$jour" ;
	  					$bdd->exec(" UPDATE `livre` SET `deposer` = '1' WHERE `livre`.`ISBN` = $isbn");
	  					$bdd->exec(" UPDATE `emprunt` SET `deposer` = '1' WHERE `emprunt`.`ISBN` = $isbn");
	  					$bdd->exec("UPDATE `livre` SET `NBRE_EXPLAIRE_LIVRE` = `NBRE_EXPLAIRE_LIVRE`+1 WHERE `livre`.`ISBN` = '$isbn' ");
	  					$bdd->exec("UPDATE `emprunt` SET `DATE_FIN` ='$datej'  WHERE `emprunt`.`ISBN` = '$isbn' ");
	  					//$bdd->exec("DELETE FROM `emprunt` WHERE `emprunt`.`ISBN` = $isbn ");


	  					//$bdd->query(" DELETE FROM `emprunt` WHERE `emprunt`.`ID_EMPRUNT` = $id_emprunt ");
	  				?>
	  				<div class="panel-body">
	  	
					<div class="text-center col-8 alert alert-success" style="margin: auto;">
						<strong>Livre deposer avec Succes</strong>
					</div>
	  				</div>
				</div>
			</div>
		</div>	 
	
	</div>
	
</div>	
<?php include("footer.php"); ?>

</body>
</html



