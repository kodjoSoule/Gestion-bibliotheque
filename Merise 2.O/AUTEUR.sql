/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  18/05/2021 23:46:08                      */
/*==============================================================*/


/*==============================================================*/
/* Table : AUTEUR                                               */
/*==============================================================*/
create table AUTEUR
(
   ID_AUTEUR            int  comment '',
   NOM_AUTEUR           varchar(30) not null  comment '',
   PRENOM_AUTEUR        varchar(30)  comment '',
   primary key (NOM_AUTEUR)
);

