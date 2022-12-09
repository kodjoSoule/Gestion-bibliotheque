/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  18/05/2021 23:46:08                      */
/*==============================================================*/


/*==============================================================*/
/* Table : ADMIN_BIBLIO                                         */
/*==============================================================*/
create table ADMIN_BIBLIO
(
   LOGIN_AD             varchar(8) not null  comment '',
   PASSWORD_AD          varchar(8)  comment '',
   NOM_AD               varchar(30)  comment '',
   PRENOM_AD            varchar(30)  comment '',
   DATE_NAISSANCE_AD    date  comment '',
   primary key (LOGIN_AD)
);

