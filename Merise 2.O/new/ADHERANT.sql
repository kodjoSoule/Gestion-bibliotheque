/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  18/05/2021 15:32:42                      */
/*==============================================================*/


/*==============================================================*/
/* Table : ADHERANT                                             */
/*==============================================================*/
create table ADHERANT
(
   ID_ADHERANT          int not null  comment '',
   NOM_ADHERANT         varchar(30)  comment '',
   PRENOM_ADHERANT      varchar(30)  comment '',
   ATE_NAISS_ADHERANT   date  comment '',
   ADRESSE_ADHERANT     varchar(30)  comment '',
   TEL_ADHERANT         int  comment '',
   primary key (ID_ADHERANT)
);

