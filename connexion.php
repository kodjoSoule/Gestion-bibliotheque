<?php
# Mini Projet Informatique Gestion de Bibliotheque
# Kodjo Soueymane
# Ousmane Djiguiba
# GIT
#L3S6
 $serveur = "localhost";
 $login = "root";
 $pass = "";
    try{
        $bdd = new PDO("mysql:host=$serveur;dbname=gestionbibliotheque", $login, $pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOExecption $e){
        echo "Erreur : ".$e ;
    }   
?>
