/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  18/05/2021 23:46:08                      */
/*==============================================================*/


/*==============================================================*/
/* Table : LIVRE                                                */
/*==============================================================*/
create table LIVRE
(
   ISBN                 bigint  comment '',
   TITRE_LIVRE          varchar(30) not null  comment '',
   NOM_AUTEUR           varchar(30) not null  comment '',
   LANGUE_LIVRE         varchar(30)  comment '',
   NBRE_EXPLAIRE_LIVRE  int  comment '',
   primary key (TITRE_LIVRE)
);

alter table LIVRE add constraint FK_LIVRE_REDIGER_AUTEUR foreign key (NOM_AUTEUR)
      references AUTEUR (NOM_AUTEUR) on delete restrict on update restrict;

