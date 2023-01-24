/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  13/05/2021 18:07:42                      */
/*==============================================================*/


/*==============================================================*/
/* Table : ADHERANT                                             */
/*==============================================================*/
create table ADHERANT
(
   ID_ADHERANR          int not null  comment '',
   NOM_ADHERANT         varchar(30)  comment '',
   PRENOM_ADHERAN       varchar(30)  comment '',
   ATE_NAISS_ADHERAN    date  comment '',
   ADRESSE_ADHERAN      varchar(30)  comment '',
   TEL_ADHERAN          smallint  comment '',
   primary key (ID_ADHERANR)
);

