<?php 
	session_start();
	$title = "Gestion Bibliothèque" ;
	
	require('connexion.php');
	
	global $bdd ;

?>    
<?php

                                {
                                    $nomAd = "Kodjo" ;
                                    $prenomAd = "xxxxx" ;
                                    $dateNaiss = "xxxxx" ;
                                    $adresseAd = "xxxxx";
                                    $telAd="73808852";
                                    //$bdd->exec(" INSERT INTO livre (ISBN,ID_AUTEUR, TITRE_LIVRE, LANGUE_LIVRE, NBRE_EXPLAIRE_LIVRE)VALUES (22, 'titre 1', 'langue 2', 44) ");

                                    $bdd->exec(" INSERT INTO `gestionbibliotheque`.`adherant` (`ID_ADHERANT`, `NOM_ADHERANT`, `PRENOM_ADHERANT`, `ATE_NAISS_ADHERANT`, `ADRESSE_ADHERANT`, `TEL_ADHERANT`) VALUES (NULL, '$nomAd', '  $prenomAd', '2021-05-12', '$adresseAd', '$telAd'); INSERT INTO `gestionbibliotheque`.`emprunt` (`ID_EMPRUNT`, `ISBN`, `ID_ADHERANT`, `LOGIN_AD`, `DATE_DEBUT`, `DATE_FIN`, `NBRE_EMPRUNT`) VALUES (3, '97811', '1', 'itachi', '2021-05-05', '2021-05-06', '2')");
                                    echo('sent');
                                        /*INSERT INTO auteur ( NOM_AUTEUR, PRENOM_AUTEUR) VALUES ('$nomAu','$prenomAu')*/




                                    //$bdd->exec(" INSERT INTO auteur (ID_AUTEUR, NOM_AUTEUR, PRENOM_AUTEUR) VALUES (NULL,'$nomAu','$prenomAu') ");

                                }
                            ?>