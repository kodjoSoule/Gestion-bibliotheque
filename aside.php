<?php
//Date actuelle
# Mini Projet Informatique Gestion de Bibliotheque
# Kodjo Soueymane
# Ousmane Djiguiba
# GIT
#L3S6
$datejour = getdate();
//recuperation des heure et minutes
$annee = $datejour["year"];
$mois = $datejour["mon"];
$jour = $datejour["mday"]; 
$heure=$datejour["hours"]; 
$minute=$datejour["minutes"];
?>
<div class="container-fluid" style="height: 460px;background-image: url('img/im1.jpg');background-size: cover;">
	<div class="row" >
		<div class=" col text-center ">
			<a class="col-xs-5 btn text-center bg-dark ml-5 text-light btn-lg " style="margin: 9px; height:120px;border: 1px solid black ; opacity: 0.7; font-size: 25px;" href="listeLivre.php"><br>
				Listes des livres <span class="glyphicon glyphicon-book"></span>
			</a>
			<a class="col-xs-5 btn text-center bg-dark text-light btn-lg " style="margin: 9px; height:120px;border: 1px solid black; opacity: 0.7;font-size: 25px;" href="listeAdherant.php"><br>
				Listes des Adherants <span class="glyphicon glyphicon-cloud-upload"></span>
			</a>
			<!-- <a class="col-xs-5 btn text-center ml-5 bg-dark text-light btn-lg " style="margin: 30px 9px; height:120px;border: 1px solid black; opacity: 0.7;font-size: 25px;" href="statistique.php"><br>
				Statistique<span class="glyphicon glyphicon-cloud-download"></span>
			</a> -->
			<div class="col-xs-5 text-center ml-5 bg-dark text-light bg-lg rounded " style="margin: 30px 9px; height:120px;border: 1px solid black;opacity: 0.7;"><br>
				<p style="font-size: 25px">	<?php echo "$jour/$mois/$annee <br>";echo "$heure:$minute";?> </p>
			</div>
		</div>
	</div>
</div>