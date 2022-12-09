<?php 
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
	<?php include("entete.php");?>
<div class="container-fluid">
	<div class="row">
		<?php include("menu.php");
			include("aside.php");
			
		?>

	</div>
	<?php include("footer.php");?>
</div>	

</body>
</html



