<?php $title ="Biblitheque SUNA" ;?>
<?php
	session_start();
	if(isset($_SESSION["user_login"])){
		header("location:accueil.php");
	}
	$erreurmsg = "";
	#Verification
	if (isset( $_POST["submit"] )){
		include("connexion.php");
		$sel = $bdd->prepare("SELECT * FROM admin_biblio WHERE LOGIN_AD=? AND PASSWORD_AD=? limit 1");
		$sel->execute(array($_POST["login"],$_POST["password"]));
		$user[] = $sel->fetch();
		if(count($user) >0 ){
			header("location:accueil.php");
			exit();
		}
		else{
			$erreurmsg ="Identifiant ou Mot de passe incorrect" ;
		}
	}
?>

<!DOCTYPE html>
<html>
<?php require('head.php');?>
<body>
	<?php require('entete.php') ; ?>
	<div class="container">
	<div class="row mt-5">
		<div class="col-md-6 mx-auto bg-light p-4 border rounded">
			<form method="POST" action="login.php" class="col-9 mx-auto">
				<h2>Connexion</h2>
				<div class="form-group">
					<label for="login">Nom utilisateur</label>
					<input type="text" class="form-control" name="login" id="login">
				</div>
				<div class="form-group">
					<label for="passwd">Mot de passe</label>
					<input type="password" class="form-control" name="password" id="passwd">
					<br>
					<small class='text-danger'> <?php echo $erreurmsg; ?> </small>
				</div>
				<button class="btn btn-primary ml-4" type="submit" name="submit">Connexion</button>
				<button class="btn btn-muted ml-4" type="reset" name="reset">Effacer</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>

