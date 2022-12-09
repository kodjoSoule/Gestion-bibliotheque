<?php 
# Mini Projet Informatique Gestion de Bibliotheque
# Kodjo Soueymane
# Ousmane Djiguiba
# GIT
#
	session_start();
	
	if( !isset($_SESSION["connecter"])){
		header("location:login.php");
		exit();
	}
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
		  include("aside.php");
	?>
	</div>
	
</div>	
<?php include("footer.php");?>
</body>
</html



