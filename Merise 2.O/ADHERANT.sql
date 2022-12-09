/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  18/05/2021 23:46:08                      */
/*==============================================================*/


/*==============================================================*/
/* Table : ADHERANT                                             */
/*==============================================================*/
create table ADHERANT
(
   ID_ADHERANT          int  comment '',
   NOM_COMPLET          varchar(70) not null  comment '',
   DATE_NAISS           date  comment '',
   ADRESSE_ADHERANT     varchar(30)  comment '',
   TEL_ADHERANT         int  comment '',
   primary key (NOM_COMPLET)
);

