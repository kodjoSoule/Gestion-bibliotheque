/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  13/05/2021 18:07:42                      */
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

