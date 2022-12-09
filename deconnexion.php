<?php
# Mini Projet Informatique Gestion de Bibliotheque
# Kodjo Soueymane
# Ousmane Djiguiba
# GIT
#L3S6
	session_start();
	#On termine la session 
	session_destroy();
	#On redirige vers le formulaire d'identification
	header("location:login.php");
	
	
?>