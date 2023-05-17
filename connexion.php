<?php
# Mini Projet Informatique Gestion de Bibliotheque
# Kodjo Soueymane
# Ousmane Djiguiba
# GIT
#L3S6
 $serveur = "localhost";
 $login = "root";
 $pass = "root";
 $m_dbname = "gestionbibliotheque";
 //For mysql connection
    try{
        // $bdd = new PDO("mysql:host=$serveur;dbname=gestionbibliotheque", $login, $pass);
        $bdd = new PDO("mysql:host=$serveur;dbname=$m_dbname", $login, $pass);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOExecption $e){
        echo "Erreur : ".$e ;
        // echo "Erreur de connexion au base de donnees: ";
    }   
?>
