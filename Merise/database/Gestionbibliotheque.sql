/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  16/05/2021 00:30:36                      */
/*==============================================================*/


alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_CONCERNE_LIVRE;

alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_EFFECTUER_ADHERANT;

alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_GERER_ADMIN_BI;

alter table LIVRE 
   drop foreign key FK_LIVRE_REDIGER_AUTEUR;

drop table if exists ADHERANT;

drop table if exists ADMIN_BIBLIO;

drop table if exists AUTEUR;


alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_CONCERNE_LIVRE;

alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_EFFECTUER_ADHERANT;

alter table EMPRUNT 
   drop foreign key FK_EMPRUNT_GERER_ADMIN_BI;

drop table if exists EMPRUNT;


alter table LIVRE 
   drop foreign key FK_LIVRE_REDIGER_AUTEUR;

drop table if exists LIVRE;

mysql> source <file_name>;

mysql> source <file_name>;

mysql> source <file_name>;

mysql> source <file_name>;

mysql> source <file_name>;

