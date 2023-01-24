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
		<?php
			if(isset($_GET["isbn"])){
			$isbn = $_GET["isbn"];
	 		}
	  	?>
		 <div class="container-fluid " style="height: 100%;background-image: url('img/im1.jpg');background-size: cover;">
		 	<div class="row">
			 	<div class="col-1 mt-5">
			 		<a class="btn btn-primary btn-lg" href="retirerLivre.php"><span class="glyphicon glyphicon-chevron-left"></span >Retour</a> 
			 	</div>
				<div class="col-9 mx-auto panel panel-default ">
	  				<div class="panel-heading"><h3>Listes des livres</h3></div>
	  				<?php
	  					$bdd->query("DELETE FROM `livre` WHERE `livre`.`ISBN` = $isbn");
	  				?>
	  				<div class="panel-body">
	  	
					<div class="text-center col-8 alert alert-success" style="margin: auto;">
						<strong>Livre Retirer avec Succes</strong>
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



