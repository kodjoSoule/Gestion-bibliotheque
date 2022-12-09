<?php
session_start();
#$_SESSION["conecter"] = "oui";
$title ="Biblitheque TOHO" ;?>

<?php
	
	if(isset($_SESSION["connecter"])){
		header("location:accueil.php");
	}
	$erreurmsg = "";
	$afficherErr = false;
	#Verification
	if (isset( $_POST["submit"] )){
		include("connexion.php");
		$requete = "SELECT * FROM admin_biblio" ;
		$reponse = $bdd->query($requete);
		while($donnee = $reponse->fetch()){
			if($donnee["LOGIN_AD"] == $_POST["login"] && $donnee["PASSWORD_AD"]==$_POST['password']){
				$_SESSION['connecter'] = "OUI";
				$_SESSION['nom'] = $donnee['NOM_AD'];
				$_SESSION['prenom'] = $donnee['PRENOM_AD'];
				$_SESSION['login'] = $_POST["login"];
				header("location:accueil.php");
				exit();
			}else{
				$erreurmsg ="Identifiant ou Mot de passe incorrect" ;
				$afficherErr = true;
				#echo "<script>alert('Identifiant ou Mot de passe incorrect')</script>";
			}
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
				</div>
				<button class="btn btn-primary ml-4" type="submit" name="submit">Connexion</button>
				<button class="btn btn-muted ml-4" type="reset" name="reset">Effacer</button>
				<br><br>
			</form>
			<?php if($afficherErr){ ?>
			<div class="text-center col-8 alert alert-danger" style="margin: auto;">
				<strong><?php echo $erreurmsg ; ?></strong>
			</div>
		<?php } ?>
		</div>
	</div>
</div>
</body>
</html>