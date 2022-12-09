/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  18/05/2021 15:32:42                      */
/*==============================================================*/


/*==============================================================*/
/* Table : AUTEUR                                               */
/*==============================================================*/
create table AUTEUR
(
   ID_AUTEUR            int not null  comment '',
   NOM_AUTEUR           varchar(30)  comment '',
   PRENOM_AUTEUR        varchar(30)  comment '',
   primary key (ID_AUTEUR)
);

