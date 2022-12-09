<!-- HEADER -->
<div class="container-fluid" style="background-image: url('img/pic_bibli.jpg'); height: 17em" >
	<div class="row">
		<span class="col-xs-4 col-sm-3 col-md-6 btn-default btn-lg mx-auto text-center" style="Opacity: 200%;margin-top: 5em; box-shadow: 10px 10px 20px black;">Bienvenue à la bibliotheque TOHO
			<?php if(isset($_SESSION['connecter'])){
				echo $_SESSION['connecter'];
			}?>
			<span class="glyphicon glyphicon-book" style="font-size: 25px;"></<span>
</span> 
	</div>
</div>