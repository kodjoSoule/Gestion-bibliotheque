/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  16/05/2021 00:30:36                      */
/*==============================================================*/


/*==============================================================*/
/* Table : LIVRE                                                */
/*==============================================================*/
create table LIVRE
(
   ISBN                 int not null  comment '',
   NOM_AUTEUR           varchar(30) not null  comment '',
   TITRE_LIVRE          varchar(30)  comment '',
   LANGUE_LIVRE         varchar(30)  comment '',
   NBRE_EXPLAIRE_LIVRE  int  comment '',
   primary key (ISBN)
);

alter table LIVRE add constraint FK_LIVRE_REDIGER_AUTEUR foreign key (NOM_AUTEUR)
      references AUTEUR (NOM_AUTEUR) on delete restrict on update restrict;

