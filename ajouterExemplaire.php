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
			 		<a class="btn btn-primary btn-lg" href="listeLivre.php"><span class="glyphicon glyphicon-chevron-left"></span >Retour</a>  
			 	</div>
				<div class="col-9 mx-auto panel panel-default ">
	  					<div class="panel-heading">
							  <h3>Ajouter Exemplaire</h3>
						</div>
	  					<div class="panel-body">
	  					<?php
	  					if(isset($_GET["isbn"])){
	  						$isbn = $_GET["isbn"];
	  					}
	  					?>
	  					<form class="ml-4" method="POST" action="#">
		  					<div class="row">
		  						<div class="col-6">
		  							<h3>Livre</h3>
		  							<h3>ID : <?php echo $isbn; ?></h3>
		  							<div class="form-group">
		  								<label>Exemplaire</label>
		  								<input class="form-control col-4" type="number" min="1" name="nbreExpl" required>
		  							</div>

		  						</div>
		  						
		  					</div>
	  							<button type="submit" name="submit" class="btn btn-success col-5 ml-3">
	  							Ajouter</button>
	  					</form>
	  					<?php
	  						if(isset($_POST["nbreExpl"])){
	  							$nbreExpl = $_POST["nbreExpl"] ;

	  							//$bdd->exec("UPDATE livre SET NBRE_EXPLAIRE_LIVRE += $nbreExpl WHERE ISBN = $isbn");
	  							$bdd->exec("UPDATE `livre` SET `NBRE_EXPLAIRE_LIVRE` = `NBRE_EXPLAIRE_LIVRE` + '$nbreExpl' WHERE `livre`.`ISBN` = $isbn");
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



