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

<div class="container-fluid" style="height: 460px;background-image: url('img/im1.jpg');background-size: cover;">
	<div class="row" >
		<div class=" col text-center ">
			<a class="col-xs-5 btn text-center bg-dark ml-5 text-light btn-lg " style="margin: 9px; height:120px;border: 1px solid black ; opacity: 0.7; font-size: 25px;" href="ajouterLivre.php"><br>
				Ajouter livre <span class="glyphicon glyphicon-book"></span>
			</a>
			<a class="col-xs-5 btn text-center bg-dark text-light btn-lg " style="margin: 9px; height:120px;border: 1px solid black; opacity: 0.7;font-size: 25px;" href="livreRendue.php"><br>
				Livres Rendues <span class="glyphicon glyphicon-cloud-upload"></span>
			</a>
			<!-- <a class="col-xs-5 btn text-center bg-dark text-light btn-lg " style="margin: 9px ;height:120px;border: 1px solid black; opacity: 0.7;font-size: 25px;" href="ajouterExemplaire.php"><br>
				Ajouter exemplaire <span class="glyphicon glyphicon-cloud-upload"></span>
			</a> -->
		</div>
	</div>
</div>
<?php include("footer.php");?>
</body>
</html



