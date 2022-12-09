<?php include('head.php'); ?>
<div class="container">
	<div class="row mt-5">
		<div class="col-md-6 mx-auto bg-light p-4 border rounded">
			<form method="POST" accept="" class="col-9 mx-auto">
				<h2>Recuperation Compte</h2>
				<div class="form-group">
					<label for="username">Nom </label>
					<input type="text" class="form-control" name="username" id="username">
				</div>
				<div class="form-group">
					<label for="passwd">Prenom</label>
					<input type="password" class="form-control" name="passwd" id="passwd">
				</div>
				<button class="btn btn-primary ml-4" type="submit">Connexion</button>
				<button class="btn btn-muted ml-4" type="reset">Effacer</button>
				<br><br>
			</form>
		</div>
	</div>
</div>